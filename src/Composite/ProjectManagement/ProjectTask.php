<?php

namespace Src\Composite\ProjectManagement;

class ProjectTask implements ProjectComponent
{
    public function __construct(
        private readonly string $title,
        private readonly string $description,
        private readonly int $status,
    ) {}

    public function done(): mixed
    {
        // TODO: Implement done() method.
        return [$this->status, $this->title, $this->description];
    }

    public function duplicate(): mixed
    {
        // TODO: Implement duplicate() method.
        return true;
    }

    public function delete(): mixed
    {
        // TODO: Implement delete() method.
        return true;
    }

    public function move(): mixed
    {
        // TODO: Implement move() method.
        return true;
    }
}
