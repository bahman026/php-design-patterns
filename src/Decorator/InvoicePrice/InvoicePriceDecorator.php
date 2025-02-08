<?php

namespace Src\Decorator\InvoicePrice;

class InvoicePriceDecorator implements InvoicePrice
{
    public function __construct(private readonly InvoicePrice $invoicePrice) {}

    public function price(): float
    {
        return $this->invoicePrice->price();
    }
}
