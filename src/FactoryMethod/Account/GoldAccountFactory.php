<?php

namespace Src\FactoryMethod\Account;

class GoldAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new GoldAccount();
    }
}
