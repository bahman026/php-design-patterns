<?php

namespace Src\Builder\OrderBuilder;

class OrderBuilder
{
    private string $customer;

    private int $totalPrice;

    private int $finalPrice;

    private string $deliveryAddress;

    private OrderLine $orderLines;

    private int $status;

    private ?Order $order;

    public function __construct(?Order $order)
    {
        $this->order = $order;
    }

    public static function forge(?Order $order): OrderBuilder
    {
        return new OrderBuilder($order);
    }

    public function withCustomer(string $customer): OrderBuilder
    {
        $this->customer = $customer;

        return $this;
    }

    public function withTotalPrice(int $totalPrice): OrderBuilder
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function withFinalPrice(int $finalPrice): OrderBuilder
    {
        $this->finalPrice = $finalPrice;

        return $this;
    }

    public function withDeliveryAddress(string $deliveryAddress): OrderBuilder
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function withOrderLines(OrderLine $orderLines): OrderBuilder
    {
        $this->orderLines = $orderLines;

        return $this;
    }

    public function withStatus(int $status): OrderBuilder
    {
        $this->status = $status;

        return $this;
    }

    public function build(): Order
    {
        return new Order(
            $this->customer ?? $this->order->getCustomer(),
            $this->totalPrice ?? $this->order->getTotalPrice(),
            $this->finalPrice ?? $this->order->getFinalPrice(),
            $this->deliveryAddress ?? $this->order->getDeliveryAddress(),
            $this->orderLines ?? $this->order->getOrderLines(),
            $this->status ?? $this->order->getStatus(),
        );
    }
}
