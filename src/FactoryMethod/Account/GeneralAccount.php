<?php

namespace Src\FactoryMethod\Account;

class GeneralAccount implements Account
{

    public function interestRate(): float
    {
        return 0.2;
    }

    public function minimumBalanceDefinition(): int
    {
        return 100000;
    }
}
