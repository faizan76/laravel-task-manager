<!-- resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Create Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <button class="btn btn-success">Save</button>
</form>
@endsection