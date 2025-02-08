<?php

namespace Src\Adapter\PaymentProvider;

class SamanBankGateway
{
    public function __construct(private readonly string $apiKey) {}

    public function pay(): void
    {
        echo 'apiKey'.$this->apiKey;
    }
}
