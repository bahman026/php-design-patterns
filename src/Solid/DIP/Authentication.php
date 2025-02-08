<?php

namespace Src\Solid\DIP;

use Illuminate\Contracts\Container\BindingResolutionException;

class Authentication
{
    private mixed $userProvider;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->userProvider = app()->make(UserProviderInterface::class);
    }

    public function check(string $username, string $password): bool
    {
        $user = $this->userProvider->findUser($username);
        if (! $user) {
            throw new \RuntimeException('invalid username');
        }

        return true;
    }
}
