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

        // return $projects;
        // echo ($projects);
        return view('projects.index', ['projects' => $projects]);// );
    }
    
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show', compact('project'));
    }
     
    public function create()
    {
        return view('projects.create');
    }
    
    public function store()
    {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();

        return redirect('/projects');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::find($id);

        $project->title = request('title');

        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect('/projects');
    }
}
