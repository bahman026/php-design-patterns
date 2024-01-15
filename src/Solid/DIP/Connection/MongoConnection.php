<?php

namespace Src\Solid\DIP\Connection;

use Illuminate\Database\Eloquent\Collection;

class MongoConnection implements ConnectionInterface
{
    /**
     * @param string $query
     * @param array $args
     * @return Collection
     */
    public function query(string $query, array $args): Collection
    {
        return new Collection();
    }
}
