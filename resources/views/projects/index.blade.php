@extends('layout')
@section('title', 'Project')
@section('content')
    <h1 class="title">Project</h1>
    <ul>
    @foreach ($project as $item)
    <li>
        <a href="{{ route('project.show', ['project' => $item->id]) }}">{{ $item->title }}</a>
        {{-- <a href="{{ route('project.edit', ['project' => $item->id]) }}"><button>edit</button></a> --}}
    </li>
    @endforeach
    </ul>
@endsection