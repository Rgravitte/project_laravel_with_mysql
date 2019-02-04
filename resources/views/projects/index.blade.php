@extends('layout')

@section('content')
    
<h1>Projects!</h1>
    <ul>
        @foreach ($projects as $projects)
            <li>
                <a href="/projects/{{ $projects->id }}">
                    {{ $projects->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <p>
        <a href="/projects/create">Create New Project</a>
    </p>

@endsection