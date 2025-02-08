<?php

namespace Src\Adapter\Tasks;

class Task
{
    public function __construct(
        private readonly string $title,
        private readonly string $description,
        private readonly int $status,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}
