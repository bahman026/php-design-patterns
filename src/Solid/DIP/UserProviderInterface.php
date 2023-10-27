<?php

namespace Src\Solid\DIP;

use Illuminate\Database\Eloquent\Collection;

interface UserProviderInterface
{
    public function findUser(string $username): Collection;
}
