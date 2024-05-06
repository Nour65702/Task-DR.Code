# Task Model

The `Task` model represents a task in the application. It is used to interact with the `tasks` database table and defines the structure and behavior of task entities.

## Table Structure

The `tasks` table contains the following columns:

- `id`: Primary key of the task.
- `user_id`: Foreign key referencing the user associated with the task.
- `type_id`: Foreign key referencing the type of the task.
- `title`: Title of the task.
- `description`: Description of the task.
- `priority`: Priority level of the task (low, medium, or high).
- `due_date`: Due date of the task.
- `completed`: Indicates whether the task is completed (true or false).
- `completed_at`: Timestamp indicating when the task was completed.

## Model Attributes

The `Task` model has the following attributes:

- `user_id`: The ID of the user associated with the task.
- `type_id`: The ID of the type of the task.
- `title`: The title of the task.
- `description`: The description of the task.
- `priority`: The priority level of the task (low, medium, or high).
- `due_date`: The due date of the task.
- `completed`: Indicates whether the task is completed (true or false).
- `completed_at`: The timestamp indicating when the task was completed.

## Relationships

The `Task` model defines the following relationships:

- `user()`: Belongs to a user. Each task belongs to a single user.
- `type()`: Belongs to a type. Each task belongs to a single type.

## Usage

The `Task` model can be used to perform CRUD (Create, Read, Update, Delete) operations on tasks. It provides methods to access and manipulate task data, as well as to define relationships with other models.

### Example Usage

```php
use App\Models\Task;

// Create a new task
$task = Task::create([
    'user_id' => 1,
    'type_id' => 1,
    'title' => 'Example Task',
    'description' => 'This is an example task description.',
    'priority' => 'medium',
    'due_date' => '2024-05-10',
    'completed' => false,
    'completed_at' => null
]);

// Retrieve a task
$task = Task::find(1);

// Update a task
$task->update([
    'priority' => 'high',
    'due_date' => '2024-05-15'
]);

// Delete a task
$task->delete();
