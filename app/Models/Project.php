<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
    
    public function addTask($description){
        return Task::create([
            'project_id' => $this->id,
            'description' => $description['description']
        ]);
        // $this->tasks()->create($description); 
    }

}
