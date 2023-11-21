<?php

namespace Src\FactoryMethod\Account;

class VIPAccount implements Account
{

    public function interestRate(): float
    {
        return 0.23;
    }

    public function minimumBalanceDefinition(): int
    {
        return 50000000;
    }
}
