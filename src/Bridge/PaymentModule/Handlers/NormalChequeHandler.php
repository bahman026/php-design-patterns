<?php

namespace Src\Bridge\PaymentModule\Handlers;

use Src\Bridge\PaymentModule\Invoice;
use Src\Bridge\PaymentModule\PaymentHandler;

class NormalChequeHandler implements PaymentHandler
{
    public function pay(Invoice $invoice): void
    {
        // TODO: Implement pay() method.
    }
}
