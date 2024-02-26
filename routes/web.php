<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;

Route::get('/', function () {

    return view('pages.index');
});

Route :: get('/projects', [ProjectController :: class, 'index'])
    -> name('project.index');

Route :: get('/types', [TypeController :: class, 'index'])
    -> name('type.index');
