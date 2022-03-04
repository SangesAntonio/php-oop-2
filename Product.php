<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $quantity;

    public function __construct($_id, $_price, $_description, $_name, $_quantity)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->quantity = $_quantity;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
