@extends('layouts.main-layout')
@section('head')
    <title>Types</title>
@endsection
@section('content')
    <h1>Types</h1>
    <ul>
        @foreach ($types as $type)
            <li>
                {{ $type -> name }}:
                {{ count($type -> projects) }}
                <br>
                <ul>
                    @foreach ($type -> projects as $project)
                        <li>
                            {{ $project -> name }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
