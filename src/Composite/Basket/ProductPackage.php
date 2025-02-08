<?php

namespace Src\Composite\Basket;

class ProductPackage implements ProductItem
{
    public function __construct(private readonly array $products) {}

    public function price(): int
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price();
        }

        return $total;
    }
}
