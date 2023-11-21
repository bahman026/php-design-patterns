<?php

namespace Src\FactoryMethod\Account;

class GeneralAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new GeneralAccount();
    }
}
