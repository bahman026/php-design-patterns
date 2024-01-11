<?php

namespace Src\Adapter\PaymentProvider;

use http\Exception\InvalidArgumentException;

class Invoice
{
    /**
     * @param $amount
     */
    public function __construct(private $amount)
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('invalid argument');
        }
    }


    public function amount(): int
    {
        return $this->amount;
    }
}
