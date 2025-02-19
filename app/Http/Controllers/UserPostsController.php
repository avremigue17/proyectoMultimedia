<?php

namespace App\Http\Controllers;

use App\Models\UserPosts;
use Illuminate\Http\Request;

class UserPostsController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Request $request)
    {   
        $data = $request->all();
        $userPost = new UserPosts;
        $userPost->post_id = $data["post_id"];
        $userPost->user_id = $data["user_id"];
        $userPost->save();

        return redirect()->back();
    }
}
