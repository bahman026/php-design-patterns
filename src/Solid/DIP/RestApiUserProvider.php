<?php

namespace Src\Solid\DIP;

use Illuminate\Database\Eloquent\Collection;
use Src\Solid\DIP\Connection\ConnectionInterface;

class RestApiUserProvider implements UserProviderInterface
{
    private ConnectionInterface $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    public function findUser(string $username): Collection
    {
        $user = $this->connection->query('SELECT username FROM users where username LIKE ?', ['username' => $username]);

        /** @phpstan-ignore-next-line */
        if (! $user) {
            throw new \RuntimeException('invalid username');
        }

        return $user;
    }
}
