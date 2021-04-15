<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Contracts\Filesystem\Filesystem;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        return view('projects.index', compact('project'));
    }

    public function show(Project $project){
        return view('projects.show', compact('project'));
    }
    public function create(){
        return view('projects.create');
    }

    public function store(){
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Project::create($attributes);
        return redirect('/project');
    }

    public function edit(Project $project){
        // $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){
        $project->update(request(['title', 'description']));
        return redirect('/project');
    }

    public function destroy(Project $project){
        // $project = Project::findOrFail($id);
        $project->delete();
        return redirect('/project');
    }
}