<?php

namespace Src\Solid\DIP;

use Illuminate\Database\Eloquent\Collection;

class MySqlUserProvider implements UserProviderInterface
{
    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param string $user
     * @return Collection
     */
    public function findUser(string $username): Collection
    {
        $user = $this->connection->query("SELECT username FROM users where username LIKE ?", ['username' => $username]);
        if (!$user) {
            throw new \RuntimeException('invalid username');
        }
    }
}
