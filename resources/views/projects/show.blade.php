@extends('layout')
@section('content')
    <h1 class="title">
        {{ $project->title }}
    </h1>

    <div class="content">
        {{ $project->description }}
    </div>
    <p>
        <a href="{{ route('project.edit', ['project' => $project->id]) }}">Edit</a>
    </p>
    <div>
        <ul>
            @foreach ($project->tasks as $task)
                <div>
                    <form action="{{ route('project.task.update', ['task' => $task->id]) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <label for="completed" class="checkbox"></label>
                        <input type="checkbox" name="completed" onchange="this.form.submit()"
                            {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </form>
                </div>
            @endforeach
        </ul>
    </div>


    {{-- add new task --}}
    <div class="row g-3">
        <form action="{{ route('project.task.store', ['project' => $project->id]) }}" method="POST">
            @csrf
            <div class="field">
                <label for="description"><b>New Task</b></label>

                <div class="mb-3">
                    <input type="text" class="form-control" name="description" placeholder="Create new task">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Create Task</button>
                </div>
            </div>
        </form>
    </div>
    @include('errors')

@endsection
