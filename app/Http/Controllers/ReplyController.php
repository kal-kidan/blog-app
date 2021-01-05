<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use Auth;
use App\Comment;
class ReplyController extends Controller
{
    public function addReply(Request $request){
        $reply = new Reply;
        $reply->user_id = Auth::id();
        $reply->comment_id = $request->input('comment_id');
        $reply->content = $request->input('content'); 
        $reply->save();
        $postId = Comment::find($request->input('comment_id'))->post_id;
        return  redirect()->to("blog-detail/$postId");
    }
}
