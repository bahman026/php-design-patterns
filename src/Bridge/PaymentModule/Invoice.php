<?php

namespace Src\Bridge\PaymentModule;

class Invoice
{
    public function __construct(
        private readonly string $title,
        private readonly int $price,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
