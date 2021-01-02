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
 
   }

   public function store(Request $request)
 
   { 
    $errors = $this->validate($request, [
       'title' => 'required|string|max:250',
       'image' => 'required|image',
       'content' => 'required|string|max:5000'
    ]);
     
      $image=$request->file('image');
      $uploadedImage = "img-blog".time().rand(1000,1000000000).".".$image->extension();
      $image->move('uploads', $uploadedImage);
      $path="uploads/".$uploadedImage;
      $blog=new Blog;
      $blog->user_id=Auth::id();
      $blog->title = $request->input('title');
      $blog->content = $request->input('content');  
      $blog->image = $path;
      $blog->save();
      return redirect()->back()->with('message','you successfully posted a blog!');
      
    
      //  Session::flash('flash_message', 'Task successfully added!');
      //  return redirect()->back();
 
   }

   public function createBlog(){
     return view('create');
   }

   public function blogDetail(){
      return view('blog-detail');
    }
   
}
