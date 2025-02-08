<?php

namespace Src\Creational\FactoryMethod\Account;

class GoldAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new GoldAccount;
    }
}
