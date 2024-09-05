<?php

use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

if (!function_exists("getPostLike")) {
    function getPostLike($post_id)
    {
        $authenticatedUserId = Auth::user()->uuid;
        $getLike = Like::where([
            "user_id" => $authenticatedUserId,
            "post_id" => $post_id
        ])->first();
        if ($getLike) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists("getUser")) {
    function getUser($user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            return $user;
        } else {
            return false;
        }
    }
}
