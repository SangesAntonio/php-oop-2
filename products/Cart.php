<?php
class Cart
{
    private $product;

    function __construct($_product)
    {
        $this->getProduct();
    }


    /**
     * Get the value of product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }
}
