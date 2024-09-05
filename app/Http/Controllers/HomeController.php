<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['posts'] = Post::with('user')->where('status', 1)->latest()->get();
        $data['followings'] = Follower::where(['user_id' => auth()->user()->uuid])->latest()->get();
        $data['followers'] = Follower::where(['follower_id' => auth()->user()->uuid])->latest()->get();
        return view('home', $data);
    }
}
