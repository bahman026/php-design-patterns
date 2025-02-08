<?php

namespace Src\Builder\OrderBuilder;

class OrderLine
{
    public function __construct(
        private readonly string $orderName,
        private readonly int $count,
        private readonly int $price,
    ) {}

    public function getOrderName(): string
    {
        return $this->orderName;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
