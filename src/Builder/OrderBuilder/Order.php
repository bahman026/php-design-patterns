<?php

namespace Src\Builder\OrderBuilder;

class Order
{
    /**
     * @param string $customer
     * @param int $totalPrice
     * @param int $finalPrice
     * @param string $deliveryAddress
     * @param OrderLine $orderLines
     * @param int $status
     */
    public function __construct(
        private readonly string $customer,
        private readonly int $totalPrice,
        private readonly int $finalPrice,
        private readonly string $deliveryAddress,
        private readonly OrderLine $orderLines,
        private readonly int $status,
    ) {
    }

    /**
     * @return string
     */
    public function getCustomer(): string
    {
        return $this->customer;
    }

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @return int
     */
    public function getFinalPrice(): int
    {
        return $this->finalPrice;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    /**
     * @return OrderLine
     */
    public function getOrderLines(): OrderLine
    {
        return $this->orderLines;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
}
