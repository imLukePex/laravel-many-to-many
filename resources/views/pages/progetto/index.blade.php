@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project -> name }} :
                {{ $project -> type -> name }}
            </li>
        @endforeach
    </ul>
@endsection
