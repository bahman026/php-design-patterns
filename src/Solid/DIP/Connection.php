<?php

namespace Src\Solid\DIP;

use Illuminate\Database\Eloquent\Collection;

class Connection
{
    public function query(string $query, array $args): Collection
    {
        return new Collection;
    }
}
