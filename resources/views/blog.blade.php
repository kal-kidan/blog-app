

@extends('layouts.app')

@section('content')
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blogs</title>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
   
<div class="container">
@php
use Carbon\Carbon;
@endphp
@foreach ($blogs as $blog) 
    
    <div class="well"> 
      <div class="media">
      	<a class="pull-left" href="#">
        {{-- http://placekitten.com/150/150 --}}
    		<img class="media-object" src="{{$blog->image}}" width="130px" height="100px">
  		</a>
  		<div class="media-body">
      <a href="{{url('/blog-detail/'.$blog->id)}}" target="blank"> 
      <h4 class="media-heading">{{$blog->title}}</h4>
      </a>
          <p class="text-right">{{$blog->user->name}}</p>
          <p> {{substr($blog->content,0,100)}} ..</p> 
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> {{Carbon::parse($blog->created_at)->isoFormat('dddd D')}} </span></li>
            <li></li>
            <span><i class="glyphicon glyphicon-comment"></i> {{count($blog->comments)}} </span> 
            <li>
               <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
            </li> 
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
       </div>
    </div>
  </div>   
   
@endforeach
</div> 
    </body>
</html>

@endsection
