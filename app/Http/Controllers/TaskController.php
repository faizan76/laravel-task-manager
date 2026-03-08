<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Show form to create task
    public function create()
    {
        return view('tasks.create');
    }

    // Save new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create([
            'title' => $request->title
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }

    // Show single task
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    // Show edit form
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $task->update([
            'title' => $request->title,
            // Checkbox fix: true if checked, false if not
            'completed' => $request->has('completed'),
        ]);

        // Redirect back to tasks list with success message
        return redirect()->route('tasks.index')->with('success', 'Task updated!');
    }

    // Delete task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted!');
    }
}