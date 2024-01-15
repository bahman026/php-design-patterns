<?php

namespace Src\Builder\OrderBuilder;

class OrderLine
{
    /**
     * @param string $orderName
     * @param int $count
     * @param int $price
     */
    public function __construct(
        private readonly string $orderName,
        private readonly int $count,
        private readonly int $price,
    ) {
    }

    /**
     * @return string
     */
    public function getOrderName(): string
    {
        return $this->orderName;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
