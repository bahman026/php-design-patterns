<?php

namespace Src\Solid\ISP;

interface SMSProviderInterface extends NotifierInterface
{
    public function sendSms(): bool;
}
