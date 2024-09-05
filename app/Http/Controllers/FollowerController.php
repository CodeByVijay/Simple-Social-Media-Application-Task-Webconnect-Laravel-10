<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{
    public function followUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,uuid',
        ]);

        try {
            $authenticatedUserId = Auth::user()->uuid;
            $targetUserId = $request->user_id;
            $isFollowing = Follower::create([
                "user_id" => $authenticatedUserId,
                "follower_id" => $targetUserId
            ]);
            $follow = false;
            if ($isFollowing) {
                $follow = true;
            }
            return response()->json(['status' => true, "follow" => $follow, "status_code" => 200]);
        } catch (Exception $e) {
            return response()->json(["status" => false, "message" => $e->getMessage(), "status_code" => 500]);
        }
    }
}
