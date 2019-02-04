@extends('layout')

@section('content')
    
<h1>Create a New Project!</h1>
<form method='POST' action="/projects">
    
    {{ csrf_field() }}
    <div class='field'>
        <label for='title' class='label'>Project Title</label>
    </div>
    
    <div class='control'>
        <input type='text' name='title' placeholder="Project Title" required>
    </div>

    <div class='field'>
            <label for='description' class='label'>Project Description</label>
    </div>

    <div class='control'>
        <textarea name='description' class="textarea" required></textarea>
    </div>
    <div class='field'>
        <div class="control">
            <button type="submit" class="button is-link">Create</button>
        </div>
    </div>
</form>

@endsection
