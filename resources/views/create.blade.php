@extends('layouts.app')
@section('content')
    

<form method="post" action="/todos">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" id="title"  placeholder="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Content</label>
        <input type="text" class="form-control" name="content" id="content"  placeholder="{{ old('content') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Due</label>
        <input type="text" class="form-control" name="due" id="due"  placeholder="{{ old('due') }}">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>
  @endsection