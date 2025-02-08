<?php

namespace Src\Adapter\Tasks\Packages;

class TodolsitAPI
{
    public function __construct(private readonly string $token) {}

    public function fetchTasks(int $category, int $count): array
    {
        $token = $this->token;

        return [

        ];
    }
}
