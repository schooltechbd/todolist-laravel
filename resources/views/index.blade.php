

<h2>Todos</h2>
@if (count($todos)>0)
    @foreach ($todos as $todo)
        <h3>{{ $todo->title }}</h3>
        <h4>{{ $todo->description }}</h4>
        <h4>{{ $todo->due }}</h4>
    @endforeach
    
@endif