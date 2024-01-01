<?php

namespace Src\Builder\OrderBuilder;

class OrderBuilder
{
    private $customer;
    private $totalPrice;
    private $finalPrice;
    private $deliveryAddress;
    private $orderLines;
    private $status;
    private $order;

    /**
     * @param $order
     */
    public function __construct(?Order $order)
    {
        $this->order = $order;
    }


    public static function forge(?Order $order): OrderBuilder
    {
        return new OrderBuilder($order);
    }

    public function withCustomer($customer): OrderBuilder
    {
        $this->customer = $customer;
    }

    public function withTotalPrice($customer): OrderBuilder
    {
        $this->customer = $customer;
    }

    public function withFinalPrice($customer): OrderBuilder
    {
        $this->customer = $customer;
    }

    public function withDeliveryAddress($customer): OrderBuilder
    {
        $this->customer = $customer;
    }

    public function withOrderLines($customer): OrderBuilder
    {
        $this->customer = $customer;
    }
}
