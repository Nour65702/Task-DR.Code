# TaskController

The `TaskController` is responsible for handling HTTP requests related to tasks in the application. It manages tasks' CRUD operations, task completion, displaying lists of tasks, and updating task priorities.

## Methods

### index()

**Description:** Displays a list of tasks.

**Parameters:** None.

**Returns:** View containing a list of tasks.

### create()

**Description:** Displays the form for creating a new task.

**Parameters:** None.

**Returns:** View containing the task creation form.

### store(StoreTaskFormRequest $request)

**Description:** Stores a newly created task in the database.

**Parameters:**
- `$request` (StoreTaskFormRequest): Validated form data for creating a task.

**Returns:** Redirects back to the task index page with a success message.

### show(Task $task)

**Description:** Displays details of a specific task.

**Parameters:**
- `$task` (Task): The task to display details for.

**Returns:** View containing details of the specified task.

### edit(Task $task)

**Description:** Displays the form for editing a specific task.

**Parameters:**
- `$task` (Task): The task to edit.

**Returns:** View containing the task edit form.

### update(UpdateTaskFormRequest $request, Task $task)

**Description:** Updates the specified task in the database.

**Parameters:**
- `$request` (UpdateTaskFormRequest): Validated form data for updating the task.
- `$task` (Task): The task to update.

**Returns:** Redirects back to the task index page with a success message.

### destroy(Task $task)

**Description:** Deletes the specified task from the database.

**Parameters:**
- `$task` (Task): The task to delete.

**Returns:** Redirects back to the task index page with a success message.

### complete(Task $task)

**Description:** Marks the specified task as completed.

**Parameters:**
- `$task` (Task): The task to mark as completed.

**Returns:** Redirects back to the task index page with a success message.

### showCompleted()

**Description:** Displays a list of completed tasks.

**Parameters:** None.

**Returns:** View containing a list of completed tasks.

### updateTaskPriorities()

**Description:** Dispatches a job to update task priorities.

**Parameters:** None.

**Returns:** Redirects back to the task index page with a success message after dispatching the job.

## Dependencies

- `App\Http\Requests\Task\StoreTaskFormRequest`: Form request validation for storing tasks.
- `App\Http\Requests\Task\UpdateTaskFormRequest`: Form request validation for updating tasks.
- `App\Jobs\UpdateTaskPriorityJob`: Job for updating task priorities.
- `App\Models\Task`: Task model.
- `App\Models\Type`: Type model.
- `App\Models\User`: User model.
- `Illuminate\Support\Facades\Cache`: Facade for caching.
- `Illuminate\Support\Facades\Cache::remember()`: Method for caching query results.
