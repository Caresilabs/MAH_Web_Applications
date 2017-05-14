<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->title = $request->title;
        $comment->comment = $request->comment;
        $comment->blogpost_id = $request->postId;
        
        $comment->save();
        
        return redirect()->action('BlogpostController@show', $request->postId);
    }
    
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->action('BlogpostController@show', $comment->blogpost_id);
    }
}