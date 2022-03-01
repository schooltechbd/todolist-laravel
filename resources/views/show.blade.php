@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary mt-2"> Go back</a>
    <h1>{{ $todo->title }}</h1>
    <div class="badge bg-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>
    <form action="/todos/{{ $todo->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger float-end">Delete</button>
    </form>
    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
@endsection
