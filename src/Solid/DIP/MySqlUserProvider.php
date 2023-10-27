<?php

namespace Src\Solid\DIP;

use Illuminate\Database\Eloquent\Collection;
use Src\Solid\DIP\Connection\ConnectionInterface;

class MySqlUserProvider implements UserProviderInterface
{
    private $connection;

    /**
     * @param ConnectionInterface $connection
     */
    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param string $user
     * @return Collection
     */
    public function findUser(string $username): Collection
    {
        dd('mysqlUser');
        $user = $this->connection->query("SELECT username FROM users where username LIKE ?", ['username' => $username]);
        if (!$user) {
            throw new \RuntimeException('invalid username');
        }
    }
}
