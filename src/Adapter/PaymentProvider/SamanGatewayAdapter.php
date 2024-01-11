<?php

namespace Src\Adapter\PaymentProvider;

class SamanGatewayAdapter implements OnlineGateway
{

    private $samanApi;

    /**
     * @param $samanApi
     */
    public function __construct(SamanBankGateway $samanApi)
    {
        $this->samanApi = $samanApi;
    }


    public function startPay(Invoice $invoice): void
    {
        $this->samanApi->pay($invoice->amount());
    }
}
