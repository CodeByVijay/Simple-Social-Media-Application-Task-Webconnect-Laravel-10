<?php

namespace App\Http\Controllers;

use App\Events\EmailVerificationEvent;
use App\Events\ResetPasswordEvent;
use App\Models\Follower;
use App\Models\User;
use App\Models\Verification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function forgot()
    {
        return view('auth.forgot_pass');
    }
    public function reset()
    {
        return view('auth.reset');
    }

    // Register New User
    public function registerPost(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => "required|email|unique:users,email",
            "mobile" => "required|unique:users,mobile",
            "password" => "required|min:8",
        ]);

        try {

            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "mobile" => $request->mobile,
                "password" => Hash::make($request->password),
            ]);

            $this->sendAuthEmail($user->email, "verification");
            return redirect()->route('login')->with("success", "Registration successfully done. Please verify your email. Check your inbox or spam.");
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    // Login User
    public function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users,email",
            "password" => "required|min:8",
        ]);

        try {

            $credentials = $request->only(['email', 'password']);
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                if (!empty($user->email_verified_at) && !is_null($user->email_verified_at)) {
                    return redirect()->route('home')->with("success", "Login successfully.");
                } else {
                    Auth::logout();
                    $message = "Your email not verified. Please verify or <a href='" . route('resend_email', ['email' => $user->email]) . "'>Resend Verification Mail</a>";
                    return redirect()->back()->withInput()->with("error", $message);
                }
            } else {
                return redirect()->back()->withInput()->with("error", "Credentials Wrong!");
            }
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    // Resend Email verification Mail
    public function resendVerifyEmail($email)
    {
        if (!empty($email)) {
            $this->sendAuthEmail($email, "verification");
            return redirect()->route('login')->with("success", "Email sent. Check your inbox or spam.");
        } else {
            return redirect()->route('login')->with("error", "Email Not found.");
        }
    }

    // Verify Email
    public function verifyEmail(Request $request)
    {
        $token = $request->token;
        if (!empty($token)) {
            $getData = Verification::where(["token" => $token, "type" => "verification"])->first();
            if ($getData) {
                $expireAt = Carbon::parse($getData->expire_at);
                if (Carbon::now()->lt($expireAt)) {
                    User::find($getData->user_id)->update([
                        "email_verified_at" => now(),
                    ]);
                    $getData->delete();
                    return redirect()->route('login')->with("success", "Email verified successfully.");
                } else {
                    // Token has expired
                    return redirect()->route('login')->with("error", "Token has expired.");
                }
            } else {
                return redirect()->route('login')->with("error", "Token Invalid.");
            }
        } else {
            return redirect()->route('login')->with("error", "Token Invalid.");
        }
    }

    // Logout User Only Current Device
    public function logout()
    {
        Auth::logoutCurrentDevice();
        return redirect()->route("login")->with("success", "Logout successfully completed.");
    }

    // Get Followed user
    public function getUser(Request $request)
    {
        try {
            $authenticatedUserId = Auth::user()->uuid;
            $targetUserId = $request->user_id;
            $isFollowing = Follower::where('user_id', $authenticatedUserId)
                ->where('follower_id', $targetUserId)
                ->exists();
            $follow = false;
            if ($isFollowing) {
                $follow = true;
            }
            return response()->json(['status' => true, "follow" => $follow, "status_code" => 200]);
        } catch (Exception $e) {
            return response()->json(["status" => false, "message" => $e->getMessage(), "status_code" => 500]);
        }
    }

    // Forgot Password email send
    public function forgotPass(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users,email",
        ]);
        try {
            $email = $request->email;
            if (!empty($email)) {
                $this->sendAuthEmail($email, "forgot_pass");
                return redirect()->route('login')->with("success", "Forgot Password Email sent. Check your inbox or spam.");
            } else {
                return redirect()->route('login')->with("error", "Email Not found.");
            }
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    // Open Reset Password Form
    public function resetPasswordForm(Request $request)
    {
        $token = $request->token;
        if (!empty($token)) {
            $getData = Verification::where(["token" => $token, "type" => "forgot_pass"])->first();
            if ($getData) {
                $expireAt = Carbon::parse($getData->expire_at);
                if (Carbon::now()->lt($expireAt)) {
                    $user_id = $getData->user_id;

                    // $getData->delete();

                    return view('auth.reset', compact('user_id'));
                } else {
                    // Token has expired
                    return redirect()->route('login')->with("error", "Token has expired.");
                }
            } else {
                return redirect()->route('login')->with("error", "Token Invalid.");
            }
        } else {
            return redirect()->route('login')->with("error", "Token Invalid.");
        }
    }

    // Update Password
    public function setPassword(Request $request)
    {
        $request->validate([
            "user_id" => 'required|exists:users,uuid',
            "password" => 'required|min:8',
            "confirm_password" => 'required|min:8|same:password',
        ]);

        try {
            $user_id = $request->user_id;
            if (!empty($user_id)) {
                User::find($user_id)->update([
                    'password' => Hash::make($request->password)
                ]);
                Verification::where(["user_id" => $user_id, "type" => "forgot_pass"])->delete();
                return redirect()->route('login')->with("success", "Password reset successfully. Please Login your account using new password.");
            } else {
                return redirect()->route('login')->with("error", "Invalid Request.");
            }
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    // mail send function
    private function sendAuthEmail($email, $type)
    {
        try {
            $user = User::where("email", $email)->first();
            if ($user) {
                $temp_Token =  bin2hex(openssl_random_pseudo_bytes(32));
                $currentTime = Carbon::now();
                $expireAt = $currentTime->addHours(24);
                $expireAtFormatted = $expireAt->format('Y-m-d H:i:s');

                Verification::updateOrCreate([
                    "user_id" => $user->uuid
                ], [
                    "token" => $temp_Token,
                    "expire_at" => $expireAtFormatted,
                    "type" => $type,
                ]);

                if ($type == "verification") {
                    event(new EmailVerificationEvent($user, $temp_Token));
                } else {
                    event(new ResetPasswordEvent($user, $temp_Token));
                }
            } else {
                Log::channel('auth')->error("Auth Mail Send Error : {$email} - User Not Found.");
            }
        } catch (Exception $e) {
            Log::channel('auth')->error("Auth Mail Send Error : " . $e->getMessage());
        }
    }
}
