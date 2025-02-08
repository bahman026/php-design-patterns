<?php

namespace Src\Creational\FactoryMethod\Account;

// this is product
interface Account
{
    public function interestRate(): float;

    public function minimumBalanceDefinition(): int;
}
