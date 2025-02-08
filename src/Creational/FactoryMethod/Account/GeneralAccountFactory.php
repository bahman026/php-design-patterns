<?php

namespace Src\Creational\FactoryMethod\Account;

class GeneralAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new GeneralAccount;
    }
}
