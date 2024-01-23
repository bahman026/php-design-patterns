<?php

namespace Src\Composite\Basket;

class SingleProduct implements ProductItem
{
    public function __construct(private readonly int $price)
    {
    }

    public function price(): int
    {
        return $this->price;
    }
}
