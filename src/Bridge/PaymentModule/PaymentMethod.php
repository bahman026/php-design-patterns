<?php

namespace Src\Bridge\PaymentModule;

abstract class PaymentMethod
{
    public function __construct(protected readonly PaymentHandler $handler)
    {
    }

    abstract public function startPay(Invoice $invoice);
}
