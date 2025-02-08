<?php

namespace Src\Adapter\Tasks\Importers;

use Src\Adapter\Tasks\Packages\TodoistTask;
use Src\Adapter\Tasks\Packages\TodolsitAPI;
use Src\Adapter\Tasks\Task;
use Src\Adapter\Tasks\TaskImporter;
use Src\Adapter\Tasks\TaskStatus;

class TodoistImporter implements TaskImporter
{
    public function __construct(private readonly TodolsitAPI $todolsitAPI) {}

    public function import(): array
    {
        $task = $this->todolsitAPI->fetchTasks(0, 0);

        return collect($task)->map(function (TodoistTask $task) {
            return new Task($task->getName(), '', TaskStatus::INIT->value);
        })->toArray();
    }
}
