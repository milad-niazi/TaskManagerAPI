<?php

namespace App\DTOs;

class TaskDTO
{
    public string $title;
    public ?string $description;
    public string $status;
    public ?string $due_date;

    public function __construct(array $data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'] ?? null;
        $this->status = $data['status'] ?? 'pending';
        $this->due_date = $data['due_date'] ?? null;
    }

    // تبدیل DTO به آرایه برای استفاده در Repository
    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'due_date' => $this->due_date,
        ];
    }
}
