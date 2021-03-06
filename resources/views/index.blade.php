
@extends('layouts.app')

@section('content')

<h2>Todos</h2>

    @if (count($todos)>0)
    
        @foreach ($todos as $todo)
        <div class="card m-3">
            <h3><a href="todos/{{ $todo->id }}">{{ $todo->title }}</a></h3>
            <h4 class="badge bg-danger">{{ $todo->due }}</h4>
         </div>
        @endforeach
   
    @endif

@endsection