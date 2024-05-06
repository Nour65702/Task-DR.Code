<?php

namespace App\Http\Controllers\DrCode;

use App\Helpers\TaskHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskFormRequest;
use App\Http\Requests\Task\UpdateTaskFormRequest;
use App\Jobs\UpdateTaskPriorityJob;
use App\Models\Task;
use App\Models\Type;
use App\Models\User;


class TaskController extends Controller
{
    // Display a list of tasks
    public function index()
    {
        // Retrieve tasks from cache or database using TaskHelper
        $tasks = TaskHelper::getTasks();

        // Return view with tasks
        return view('tasks.index', compact('tasks'));
    }

    // Show the form for creating a new task
    public function create()
    {
        // Retrieve all types and users
        $types = Type::all();
        $users = User::all();
        // Return view with types and users
        return view('tasks.create', compact('types', 'users'));
    }

    // Store a newly created task in storage
    public function store(StoreTaskFormRequest $request)
    {
        // Validate the incoming request
        $validatedData = $request->validated();
        // Create a new task
        Task::create($validatedData);
        // Redirect back with success message
        return redirect()->route('tasks.index')->with('success', 'Task Created Successfully');
    }

    // Display the specified task
    public function show(Task $task)
    {
        // Return view with task details
        return view('tasks.show', compact('task'));
    }

    // Show the form for editing the specified task
    public function edit(Task $task)
    {
        // Retrieve all users and types
        $users = User::all();
        $types = Type::all();
        // Return view with task, users, and types
        return view('tasks.edit', compact('task', 'users', 'types'));
    }

    // Update the specified task in storage
    public function update(UpdateTaskFormRequest $request, Task $task)
    {
        // Validate the incoming request
        $validatedData = $request->validated();
        // Update the task
        $task->update($validatedData);
        // Redirect back with success message
        return redirect()->route('tasks.index')->with('success', 'Task Updated Successfully');
    }

    // Remove the specified task from storage
    public function destroy(Task $task)
    {
        // Delete the task
        $task->delete();
        // Redirect back with success message
        return redirect()->route('tasks.index')->with('success', 'Task Deleted Successfully');
    }

    // Mark the specified task as completed
    public function complete(Task $task)
    {
        // Update the task as completed
        $task->update([
            'completed' => true,
            'completed_at' => now()
        ]);
        // Redirect back with success message
        return redirect()->route('tasks.index')->with('success', 'Task Completed Successfully');
    }

    // Display a list of completed tasks
    public function showCompleted(Task $task)
    {
        // Retrieve completed tasks from cache or database using TaskHelper
        $complete = TaskHelper::getCompletedTasks();

        // Return view with completed tasks
        return view('tasks.showCompleted', compact('complete'));
    }

    // Update task priorities
    public function updateTaskPriorities()
    {
        // Dispatch the job to update task priorities
        UpdateTaskPriorityJob::dispatch();

        // Optionally, return a response or perform other actions
        return redirect()->route('tasks.index')->with('success', 'Task Priorities Update Job Dispatched.');
    }
}
