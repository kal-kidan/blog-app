<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function addComment(Request $request, $post_id){
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->post_id = $post_id;
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect()->to("blog-detail/$post_id");
       // redirect()->route('blog-detail', $post_id);
        // $blog = Blog::find($comment->post_id);
        // $comments = Comment::orderBy('created_at', 'desc')->take(5)->get();  
        //return view('blog-detail')->with(['blog' => $blog, 'comments' => $comments ]); 
     }

     public function deleteComment(Request $request, $id){
       Comment::where('id', $id)->delete();
       return redirect()->back();
     }
}
