<?php

namespace Src\Builder\OrderBuilder;

class OrderLine
{
    private $orderName;
    private $count;
    private $price;

    /**
     * @param $orderName
     * @param $count
     * @param $price
     */
    public function __construct($orderName, $count, $price)
    {
        $this->orderName = $orderName;
        $this->count = $count;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getOrderName()
    {
        return $this->orderName;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}
