@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1>EDIT PROJECT</h1>

    <form method="POST" enctype="multipart/form-data">

        @csrf
        @method("PUT")

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $project -> name }}">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $project -> description }}">
        <br>

        <label for="type_id">Type</label>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
                <option value="{{ $type -> id }}"

                    @selected($project -> type -> id === $type -> id)
                >
                    {{ $type -> name }}
                </option>
            @endforeach
        </select>
        <br>
        @foreach ($technologies as $technology)
            <div>
                <input
                    type="checkbox"
                    name="technology_id[]"
                    value="{{ $technology -> id }}"
                    id={{ "technology-" . $technology -> id }}

                    @foreach ($project -> technologies as $pTech)
                        @checked($pTech -> id === $technology -> id)
                    @endforeach
                >
                <label for={{ "technology-" . $technology -> id }}>
                    {{ $technology -> name }}
                </label>
            </div>
        @endforeach
        @if ($project -> image)
            <img src="{{ asset('storage/' . $project -> image) }}" width="100px">
            <br>
        @endif
        <br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/*">
        <br>
        <input type="submit" value="UPDATE">

    </form>
@endsection
