<?php

namespace Src\FactoryMethod\Account;

// this is product
interface Account
{
    public function interestRate(): float;

    public function minimumBalanceDefinition(): int;

}
