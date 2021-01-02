@extends('layouts.app')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
 <form class="container">
 
  <div class="form-group" action="{{url("blog")}}">
    <label for="exampleInputEmail1">Blog Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Blog Content</label>
    <input type="text" class="form-control" name="content" id="exampleInputPassword1" placeholder="Enter content">
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
