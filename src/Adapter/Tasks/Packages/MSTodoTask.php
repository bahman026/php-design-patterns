<?php

namespace Src\Adapter\Tasks\Packages;

class MSTodoTask
{
    public function __construct(
        private readonly string $title,
        private readonly string $content,
        private readonly int $status,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}
