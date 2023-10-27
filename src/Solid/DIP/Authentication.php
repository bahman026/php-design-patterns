<?php

namespace Src\Solid\DIP;

class Authentication
{
    private $userProvider;


    /**
     * @param UserProviderInterface $userProvider
     */
    public function __construct()
    {
        $this->userProvider = app()->make(UserProviderInterface::class);
    }

    public function check(string $username, string $password): bool
    {
        $user = $this->userProvider->findUser($username);
        if (!$user) {
            throw new \RuntimeException('invalid username');
        }
        return true;
    }

}
