<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Traits\ImageUploadTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    use ImageUploadTrait;


    public function savePost(Request $request)
    {
        $request->validate([
            "description" => "required|string",
            "file" => "nullable|mimes:png,jpg,jpeg"
        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile("file")) {
                $file = $this->uploadImage($request->file('file'));
            }
            Post::create([
                "user_id" => Auth::user()->uuid,
                "post_desc" => $request->description,
                "file" => $file ?? null,
            ]);
            
            DB::commit();

            return redirect()->route("home")->with("success", "Post Successfully Created.");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
