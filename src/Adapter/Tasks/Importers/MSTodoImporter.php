<?php

namespace Src\Adapter\Tasks\Importers;

use Src\Adapter\Tasks\Packages\MSTodoAPI;
use Src\Adapter\Tasks\Packages\MSTodoTask;
use Src\Adapter\Tasks\Task;
use Src\Adapter\Tasks\TaskImporter;
use Src\Adapter\Tasks\TaskStatus;

class MSTodoImporter implements TaskImporter
{
    public function __construct(private readonly MSTodoAPI $msTodoApi)
    {
    }

    public function import(): array
    {
        $task = $this->msTodoApi->getTasks();
        return collect($task)->map(function (MSTodoTask $task) {
            return new Task($task->getTitle(), $task->getContent(), TaskStatus::INIT->value);
        })->toArray();
    }
}
