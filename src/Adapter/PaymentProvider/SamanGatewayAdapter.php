<?php

namespace Src\Adapter\PaymentProvider;

class SamanGatewayAdapter implements OnlineGateway
{
    /**
     * @param SamanBankGateway $samanApi
     */
    public function __construct(private readonly SamanBankGateway $samanApi)
    {
    }


    public function startPay(Invoice $invoice): void
    {
        $this->samanApi->pay();
    }
}
