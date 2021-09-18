<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{   
    public function index()
    {
        $projects = Project::all();
        return \view('projects.index', \compact('projects'));
    }

    public function store()
    {

        $attributes = \request()->validate([
            'title' => 'required',
            'descriptions' => 'required',
        ]);

        Project::create($attributes);

        return \redirect('/projects');
    }
}
