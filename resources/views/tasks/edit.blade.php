@extends('layouts.app')

@section('content')
<h1>Edit Task</h1>

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
    </div>

    <div class="form-check mb-3">
        <!-- Explicit value and checked logic -->
        <input type="checkbox" name="completed" class="form-check-input" id="completed" value="1" {{ $task->completed ? 'checked' : '' }}>
        <label class="form-check-label" for="completed">Completed</label>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection