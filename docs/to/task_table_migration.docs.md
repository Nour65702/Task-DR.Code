# CreateTasksTable Migration

The `CreateTasksTable` migration is responsible for creating the `tasks` table in the database. This table is used to store task-related information such as title, description, priority, due date, completion status, and timestamps.

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
- `created_at`: Timestamp indicating when the task record was created.
- `updated_at`: Timestamp indicating when the task record was last updated.

## Migration Methods

### `up()`

**Description:** Runs the migrations to create the `tasks` table.

**Actions:**
- Creates the `tasks` table with the specified columns and constraints.
- Defines foreign key constraints for `user_id` and `type_id`, referencing the `users` and `types` tables respectively.

### `down()`

**Description:** Reverses the migrations to drop the `tasks` table.

**Actions:**
- Drops the `tasks` table if it exists.

## Usage

To run this migration, execute the following command in your terminal:

```bash
php artisan migrate
