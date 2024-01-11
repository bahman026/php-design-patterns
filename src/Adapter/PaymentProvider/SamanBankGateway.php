<?php

namespace Src\Adapter\PaymentProvider;

class SamanBankGateway
{
    private $apiKey;

    /**
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function pay(): void
    {
    }
}
