<?php

namespace Src\Solid\DIP\Connection;

use Illuminate\Database\Eloquent\Collection;

interface ConnectionInterface
{
    /**
     * @param  array<string>  $args
     */
    public function query(string $query, array $args): Collection;
}
