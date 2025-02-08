<?php

namespace Src\Composite\ProjectManagement;

class ProjectGroupedTasks implements ProjectComponent
{
    private array $tasks;

    /** @phpstan-ignore-next-line */
    private function add(ProjectTask $projectTask): void
    {
        $this->tasks[] = $projectTask;
    }

    public function done(): mixed
    {
        // TODO: Implement done() method.
        return $this->tasks;
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
