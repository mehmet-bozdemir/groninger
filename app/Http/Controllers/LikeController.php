<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    public function store(Post $post,  User $user)
    {
        $post->like($user->id);

        return back();
    }


    public function destroy(Post $post, User $user)
    {
        $post->dislike($user->id);

        return back();
    }
}
