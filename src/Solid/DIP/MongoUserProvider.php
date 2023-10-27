<?php

namespace Src\Solid\DIP;

use Illuminate\Database\Eloquent\Collection;
use Src\Solid\DIP\Connection\ConnectionInterface;
use Src\Solid\DIP\Connection\MySqlConnection;

class MongoUserProvider implements UserProviderInterface
{

    private $connection;

    /**
     * @param MySqlConnection $connection
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
        dd('MongoUser');
        $user = $this->connection->query("SELECT username FROM users where username LIKE ?", ['username' => $username]);
        if (!$user) {
            throw new \RuntimeException('invalid username');
        }
    }
}
