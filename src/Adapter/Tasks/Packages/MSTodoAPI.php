<?php

namespace Src\Adapter\Tasks\Packages;

use Src\Adapter\Tasks\TaskStatus;

class MSTodoAPI
{
    public function getTasks(): array
    {
        return [
            new MSTodoTask('title', 'content', TaskStatus::DONE->value)
        ];
    }
}
