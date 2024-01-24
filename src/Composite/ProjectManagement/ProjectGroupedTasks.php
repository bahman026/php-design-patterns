<?php

namespace Src\Composite\ProjectManagement;

class ProjectGroupedTasks implements ProjectComponent
{
    private array $tasks;

    private function add(ProjectTask $projectTask): void
    {
        $this->tasks[] = $projectTask;
    }

    public function done()
    {
        // TODO: Implement done() method.
    }

    public function duplicate()
    {
        // TODO: Implement duplicate() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }
}
