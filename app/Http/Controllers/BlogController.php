<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Auth;
class BlogController extends Controller
{
   public function index(Request $request){
        $blogs = Blog::all();
        $user = User::find($request->id);
        return view('blog')->with(array('blogs'=>$blogs, 'user'=>$user)); 
      // $blog = Blog::find(3);
      // if (Gate::allows('view-blog', $post)) {
      //   echo 'Allowed';
      // } else {
      //   echo 'Not Allowed';
      // }
   }

   public function store(Request $request)
<<<<<<< HEAD
   {
      if(Gate::allows('create')){
         $input = ["title"=>"Example Post","content"=>"Example content", "user_id"=>Auth::id()]; 
          Blog::create($input);
          echo "created successfuly";
        }
        else{
           echo "you are not allowed to create a blog";
        }
=======
   { 
     if(Gate::allows('create')){
      $input = ["title"=>"Example Post","content"=>"Example content", "user_id"=>Auth::id()]; 
       Blog::create($input);
       echo "created successfuly";
     }
     else{
        echo "you are not allowed to create a blog";
     }
       
   
      //  Session::flash('flash_message', 'Task successfully added!');
   
      //  return redirect()->back();
>>>>>>> kal-dev
   }
}
