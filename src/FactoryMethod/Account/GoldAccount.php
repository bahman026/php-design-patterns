<?php

namespace Src\FactoryMethod\Account;

class GoldAccount implements Account
{

    public function interestRate(): float
    {
        return 0.25;
    }

    public function minimumBalanceDefinition(): int
    {
        return 500000000;
    }
}
