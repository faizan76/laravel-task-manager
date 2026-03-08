<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app') <!-- This uses the layout -->

@section('content') <!-- Main content goes inside this section -->
<h1>Tasks</h1>
<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add Task</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Completed</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr @if($task->updated_at > now()->subDay()) class="table-warning" @endif>
            <td>{{ $task->title }}</td>
            <td>
   		@if($task->completed)
       	 	    <span class="badge bg-success">Completed</span>
    		@else
        	    <span class="badge bg-secondary">Pending</span>
   		@endif
	    </td>
            <td>
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this task?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection