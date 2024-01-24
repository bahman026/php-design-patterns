<?php

namespace Src\Composite\ProjectManagement;

class ProjectTask implements ProjectComponent
{
    public function __construct(
        private readonly string $title,
        private readonly string $description,
        private readonly int $status,
    ) {
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
