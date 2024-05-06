# UpdateTaskPriorityJob

The `UpdateTaskPriorityJob` job is responsible for updating the priority of tasks to 'high'. This job is intended to be dispatched asynchronously to update task priorities in the background.

## Job Description

When dispatched, the `UpdateTaskPriorityJob` job iterates through the tasks in the database and updates the priority of tasks that are not already set to 'high' to 'high'.

## Job Constructor

### `__construct()`

**Description:** Constructs a new instance of the job.

**Parameters:** None.

## Job Methods

### `handle()`

**Description:** Executes the job's logic.

**Actions:**
- Queries the `tasks` table to find tasks with priorities other than 'high'.
- Updates the priorities of those tasks to 'high'.

## Usage

To dispatch the `UpdateTaskPriorityJob` job, use the `dispatch()` method:

```php
use App\Jobs\UpdateTaskPriorityJob;

// Dispatch the job
UpdateTaskPriorityJob::dispatch();

## Running the Queue Worker

To process queued jobs, including the UpdateTaskPriorityJob, you need to run the queue worker using the php artisan queue:work command:

php artisan queue:work
