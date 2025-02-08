<?php

namespace Src\Builder\OrderBuilder;

class Order
{
    public function __construct(
        private readonly string $customer,
        private readonly int $totalPrice,
        private readonly int $finalPrice,
        private readonly string $deliveryAddress,
        private readonly OrderLine $orderLines,
        private readonly int $status,
    ) {}

    public function getCustomer(): string
    {
        return $this->customer;
    }

    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    public function getFinalPrice(): int
    {
        return $this->finalPrice;
    }

    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    public function getOrderLines(): OrderLine
    {
        return $this->orderLines;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}
