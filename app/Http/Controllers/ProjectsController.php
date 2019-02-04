<?php

namespace App\Http\Controllers;

use \App\Project;

// php artisan make:controller -r automatically embeds all controller methods eg: index, store, patch, create, destroy etc..
// -m with the same command adds a model 
class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }
    
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
     
    public function create()
    {
        return view('projects.create');
    }
    
    public function store()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        Project::update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
