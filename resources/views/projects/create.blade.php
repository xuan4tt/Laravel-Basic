@extends('layout')
@section('title', 'Create')
@section('content')
<h1>
    Create a New Project
</h1>  
<form class="row g-3" method="POST" action="{{ route('project.store') }}">
    @csrf
    <div class="md-3">
        <label for="formGroupExampleInput" class="form-label">Title: </label>
        <input class="form-control" {{ $errors->has('title') ? 'is-danger' : '' }} name="title" name="title" type="text">
    </div>
    <div class="md-3">
        <label for="formGroupExampleInput" class="form-label">Description: </label>
        <textarea class="form-control" name="description" {{ $errors->has('description') ? 'is-danger' : '' }} name="description" rows="3"></textarea>
    </div>
    <div>
        <button class="btn btn-success" type="submit">Create</button>
        <a class="btn btn-danger" href="{{ route('project.index') }}"><b>Exit</b></a>
    </div>
</form>

@include('errors')
@endsection