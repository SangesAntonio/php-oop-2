<?php
require_once __DIR__ . '/CatFood.php';
class Cart
{
    private $products;

    function __construct($_products)
    {
        $this->getProduct();
    }

    public function addProduct($product)
    {
        return $this->products = $product;
    }

    /**
     * Get the value of product
     */
    public function getProduct()
    {
        return $this->products;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */
    public function setProduct($products)
    {
        $this->products = $products;

        return $this;
    }
}
$cart1 = new Cart($cibo_1);
