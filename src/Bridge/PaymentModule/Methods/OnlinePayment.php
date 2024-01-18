<?php

namespace Src\Bridge\PaymentModule\Methods;

use Illuminate\Database\Connection;
use Src\Bridge\PaymentModule\Invoice;
use Src\Bridge\PaymentModule\PaymentHandler;
use Src\Bridge\PaymentModule\PaymentMethod;

class OnlinePayment extends PaymentMethod
{
    public function __construct(
        private readonly Connection $connection,
        private readonly PaymentHandler $paymentHandler,
    ) {
        parent::__construct($this->paymentHandler);
    }

    public function startPay(Invoice $invoice)
    {
        $this->connection->insert("INSERT INTO paymentsZ");
        $this->handler->pay($invoice);
    }
}
