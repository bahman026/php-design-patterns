<?php

namespace Src\Decorator\InvoicePrice;

class ServiceInvoicePrice extends InvoicePriceDecorator
{
    public function price(): float
    {
        return parent::price() + 3200;
    }
}
