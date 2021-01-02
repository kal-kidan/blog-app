@extends('layouts.app')

@section('content')
<div class="alert alert-success text-white p-3 success-message container" style="<?php if (!session()->has('message')) {
  echo "display:none";
} ?>">
  <?php echo session('message') ?? '' ?> <br>
</div>
 <form class="container" action="{{url("create")}}" method="post" enctype="multipart/form-data">
   @csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Blog Title</label>
    <input type="text" name="title" class="form-control"    placeholder="Enter title">
    <small  class="form-text text-muted">Good title can help get more views.</small>
     <small class="errors"> {{$errors->first('title')}} </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Blog Image</label>
    <input type="file" name="image" class="form-control" > 
    <small class="errors"> {{$errors->first('image')}} </small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Blog Content</label>
    <textarea   class="form-control" name="content"   placeholder="Enter content"> 
    </textarea>
    <small class="errors">  {{$errors->first('content')}} </small>
 </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
