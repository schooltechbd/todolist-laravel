@extends('layouts.app')
@section('content')
    

<form method="post" action="/todos/{{ $todo->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" id="title"  placeholder="{{ $todo->title }}" value="{{ $todo->title }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Content</label>
        <input type="text" class="form-control" name="content" id="content"  placeholder="{{ $todo->content}}" value="{{ $todo->content}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Due</label>
        <input type="text" class="form-control" name="due" id="due"  placeholder="{{ $todo->due}}" value="{{ $todo->due}}">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
  @endsection