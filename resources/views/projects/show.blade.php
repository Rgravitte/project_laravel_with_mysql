@extends('layout')


@section('content')
    
        
    <h1 class="title">{{ $project->title }}</h1>
    
    <div class='content'>{{ $project->description}}</div>

    @if ( $project->tasks->count())
    <div>
            
        @foreach ($project->tasks as $task)
        
        <div class="box">
            
            <form method="POST" action="/tasks/{{ $task->id }}">
                @method('PATCH')
                @csrf
                
                <label class="checkbox" for="completed" {{ $task->completed ? 'isComplete'  : '' }}>

                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked'  : '' }}>

                </label>
            </form>
            {{ $task->description }}
        
        </div>
        
        @endforeach
    </div>
    @endif

    <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">
        <div class="field">
            <label for="descriptionn">Add Task</label>
        </div>
        <div>
            <input type="text" class="input" label="description" placeholder="new task">
        </div>
        <div class="field">
            
            <div class="control">

                <button type="submit" class="button"></button>

            </div>

        </div>
    </form>
    
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
    

    
@endsection