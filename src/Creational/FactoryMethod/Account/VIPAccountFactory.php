<?php

namespace Src\Creational\FactoryMethod\Account;

class VIPAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new VIPAccount;
    }
}
