<?php

namespace Src\Solid\DIP\Connection;

use Illuminate\Database\Eloquent\Collection;

class MySqlConnection implements ConnectionInterface
{
    public function query(string $query, array $args): Collection
    {
        return new Collection;
    }
}
