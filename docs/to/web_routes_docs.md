# Web Routes

This file contains the web routes for your application. These routes are loaded by the RouteServiceProvider and all of them will be assigned to the "web" middleware group.

## Index Route

- **Method:** GET
- **URI:** /
- **Action:** Renders the welcome view.

## Task Routes

All task-related routes are grouped under the 'tasks' prefix.

### Index

- **Method:** GET
- **URI:** /tasks
- **Action:** Displays a list of tasks.

### Create

- **Method:** GET
- **URI:** /tasks/create
- **Action:** Displays the task creation form.

### Store

- **Method:** POST
- **URI:** /tasks
- **Action:** Stores a newly created task in the database.

### Edit

- **Method:** GET
- **URI:** /tasks/{task}/edit
- **Action:** Displays the form for editing a specific task.

### Update

- **Method:** PUT
- **URI:** /tasks/{task}
- **Action:** Updates the specified task in the database.

### Destroy

- **Method:** DELETE
- **URI:** /tasks/{task}
- **Action:** Deletes the specified task from the database.

### Complete

- **Method:** POST
- **URI:** /tasks/{task}/complete
- **Action:** Marks the specified task as completed.

### Show Completed

- **Method:** GET
- **URI:** /tasks/show-completed
- **Action:** Displays a list of completed tasks.

### Show

- **Method:** GET
- **URI:** /tasks/{task}
- **Action:** Displays details of a specific task.

### Update Task Priorities

- **Method:** GET
- **URI:** /update-task-priorities
- **Action:** Dispatches a job to update task priorities.

## Controller Binding

All task-related routes are bound to methods in the TaskController class.

### TaskController

The TaskController class located at `App\Http\Controllers\DrCode\TaskController` is responsible for handling HTTP requests related to tasks in the application.

