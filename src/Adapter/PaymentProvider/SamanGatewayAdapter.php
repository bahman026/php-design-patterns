<?php

namespace Src\Adapter\PaymentProvider;

class SamanGatewayAdapter implements OnlineGateway
{
    public function __construct(private readonly SamanBankGateway $samanApi) {}

    public function startPay(Invoice $invoice): void
    {
        $this->samanApi->pay();
    }
}
