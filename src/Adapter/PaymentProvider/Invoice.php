<?php

namespace Src\Adapter\PaymentProvider;

use http\Exception\InvalidArgumentException;

class Invoice
{
    /**
     * @param int $amount
     */
    public function __construct(private readonly int $amount)
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
