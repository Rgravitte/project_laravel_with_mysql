<?php

namespace App\Http\Controllers;

use \App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return $projects;
        // echo ($projects);
        return view('projects.index', ['projects' => $projects]);// );
    }
}
