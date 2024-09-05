<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likePost(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
        ]);

        try {
            $authenticatedUserId = Auth::user()->uuid;
            $post_id = $request->post_id;
            $getLike = Like::where([
                "user_id" => $authenticatedUserId,
                "post_id" => $post_id
            ])->first();
            if ($getLike) {
                $like = false;
                $getLike->delete();
            } else {
                $likeUser = Like::updateOrCreate([
                    "user_id" => $authenticatedUserId,
                    "post_id" => $post_id
                ]);

                    $like = true;
            }

            return response()->json(['status' => true, "like" => $like, "status_code" => 200]);
        } catch (Exception $e) {
            return response()->json(["status" => false, "message" => $e->getMessage(), "status_code" => 500]);
        }
    }
}
