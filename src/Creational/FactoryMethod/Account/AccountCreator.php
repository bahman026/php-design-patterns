<?php

namespace Src\Creational\FactoryMethod\Account;

// creator Interface
use App\Models\User;
use http\Exception\RuntimeException;

abstract class AccountCreator
{
    //    api methods
    public function registerAccount(User $user, int $balance): \App\Models\Account
    {
        $account = $this->getAccount();
        if ($balance < $account->minimumBalanceDefinition()) {
            throw new RuntimeException(' موجودی کافی نمیباشد');
        }
        $account = new \App\Models\Account(
            [
                'interest_rate' => $account->interestRate(),
            ]
        );
        $account->save();

        return $account;
    }

    //    factory methods
    abstract protected function getAccount(): Account;
}
