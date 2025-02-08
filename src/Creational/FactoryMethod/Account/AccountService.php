<?php

namespace Src\Creational\FactoryMethod\Account;

use App\Models\User;

class AccountService
{
    private AccountCreator $accountRegistry;

    public function __construct(AccountCreator $accountRegistry)
    {
        $this->accountRegistry = $accountRegistry;
    }

    public function register(User $user, int $balance): \App\Models\Account
    {
        return $this->accountRegistry->registerAccount($user, $balance);
    }
}
