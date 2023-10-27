<?php

namespace Src\Solid\ISP;

interface EmailProviderInterface extends NotifierInterface
{
    public function sendEmail(): bool;
}
