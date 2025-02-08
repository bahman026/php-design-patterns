<?php

namespace Src\Decorator\InvoicePrice;

class Invoice implements InvoicePrice
{
    public function price(): float
    {
        return 100000;
    }
}
