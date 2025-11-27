<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    public function all()
    {
        return Task::all();
    }

    public function find(int $id): ?Task
    {
        return Task::find($id);
    }

    public function create(array $data): Task
    {
        return Task::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $task = $this->find($id);
        if (!$task) return false;
        return $task->update($data);
    }

    public function delete(int $id): bool
    {
        $task = $this->find($id);
        if (!$task) return false;
        return $task->delete();
    }
}
