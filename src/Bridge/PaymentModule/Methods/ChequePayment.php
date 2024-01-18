<?php

namespace Src\Bridge\PaymentModule\Methods;

use Src\Bridge\PaymentModule\Invoice;
use Src\Bridge\PaymentModule\PaymentMethod;

class ChequePayment extends PaymentMethod
{
    public function startPay(Invoice $invoice)
    {
//        cheque pay tasks
        $this->handler->pay($invoice);
    }
}
