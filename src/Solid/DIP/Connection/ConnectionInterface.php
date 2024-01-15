<?php

namespace Src\Solid\DIP\Connection;

use Illuminate\Database\Eloquent\Collection;

interface ConnectionInterface
{
    /**
     * @param string $query
     * @param array<string> $args
     * @return Collection
     */
    public function query(string $query, array $args): Collection;
}
