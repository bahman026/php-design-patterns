<?php

namespace Src\Adapter\Tasks\Packages;

class TodoistTask
{
    public function __construct(
        private readonly string $name,
        private readonly string $create_at,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCreateAt(): string
    {
        return $this->create_at;
    }
}
