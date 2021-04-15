<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class ProjectTaskController extends Controller
{   
    public function store(Project $project){
        $attributes =  request()->validate([
            'description' => 'required'
        ]);
        $project->addTask($attributes);
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);
        return back();
    }

    public function update(Task $task){
        $task->complete(request()->has('completed'));
        
        // $task->update([
        //  'completed' => request()->has('completed')
        // ]);
        return back();
    }
}
