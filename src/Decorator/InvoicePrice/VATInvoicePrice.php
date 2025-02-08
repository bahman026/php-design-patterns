<?php

namespace Src\Decorator\InvoicePrice;

class VATInvoicePrice extends InvoicePriceDecorator
{
    public function price(): float
    {
        //        return parent::price() * 1.09;
        return parent::price() + (parent::price() * 0.09);
    }
}
