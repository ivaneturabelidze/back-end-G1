<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function getPost(Request $request){
        $post = DB::table('posts')->find($request->postId);
        $comments = DB::table('comments')->where('post_id', $request->postId)->get();
        if($post) return view('post', ['comments' => $comments, 'post' => $post]);
    }

    function getAdmin(Request $request){
        $posts = DB::table('posts')->get();
        $comments = DB::table('comments')->get();
        return view('admin', ['posts' => $posts, 'comments' => $comments]);
    }
}
