<?php

namespace App\Services;

use App\Repositories\Interfaces\TaskRepositoryInterface;
use App\DTOs\TaskDTO;
use App\Models\Task;

class TaskService
{
    protected TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    // گرفتن همه تسک‌ها
    public function getAll(): iterable
    {
        return $this->taskRepository->all();
    }

    // پیدا کردن تسک با ID
    public function getById(int $id): ?Task
    {
        return $this->taskRepository->find($id);
    }

    // ساخت تسک جدید با DTO
    public function create(TaskDTO $taskDTO): Task
    {
        return $this->taskRepository->create($taskDTO->toArray());
    }

    // بروزرسانی تسک
    public function update(int $id, TaskDTO $taskDTO): bool
    {
        return $this->taskRepository->update($id, $taskDTO->toArray());
    }

    // حذف تسک
    public function delete(int $id): bool
    {
        return $this->taskRepository->delete($id);
    }
}
