@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1>Projects</h1>
    <a href="{{ route('project.create') }}">CREATE</a>
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project -> name }} :
                {{ $project -> type -> name }}
                <br>
                <a href="{{ route('project.edit', $project -> id) }}">EDIT</a>
                <br>
                Technologies:
                <ul>
                    @foreach ($project -> technologies as $technology)
                    <li>
                        {{ $technology -> name }}
                    </li>
                    @endforeach
                </ul>
                @if ($project -> image)
                    <img src="{{ asset('storage/' . $project -> image) }}" width="300px">
                @endif
            </li>
        @endforeach
    </ul>
@endsection
