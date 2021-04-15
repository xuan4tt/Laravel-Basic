@extends('layout')
@section('title', ' Edit Project')
@section('content')    
<h1>
    Edit Project
</h1>
<div>
    <form class="row g-3" action="{{ route('project.update', ['project' => $project->id]) }}" method="POST">
        @csrf
        @method('patch')
        <div class="md-3">
            <label for="formGroupExampleInput" class="form-label">Title: </label>
            <input class="form-control" name="title" value="{{ $project->title }}" type="text">
        </div>
        <div class="md-3"> 
            <label for="formGroupExampleInput" class="form-label">Description: </label>
            <textarea class="form-control" name="description" rows="3">{{ $project->description }}</textarea>
        </div>
        <div class="md-3">
            <a class="btn btn-info" href="{{ route('project.index') }}"><b>Exit</b></a>
            <button class="btn btn-success" type="submit">Upddate</button>
        </div>
    </form>
</div>
<br>
<div>
    <form method="POST" action="{{ route('project.destroy', ['project' => $project->id]) }}">
    @csrf
    @method('delete')
    <button class="btn btn-danger" type="submit">Delete Project</button>
    </form>
</div>    
@endsection