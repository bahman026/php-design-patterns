<?php

namespace Src\Solid\DIP\Connection;

use Illuminate\Database\Eloquent\Collection;

interface ConnectionInterface
{
    public function query(string $query, array $args): Collection;
}
