<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Home redirect to tasks
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Resource routes (all CRUD)
Route::resource('tasks', TaskController::class);