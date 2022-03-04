<?php
require_once __DIR__ . '/../Product.php';
class Catfood extends Product
{
    public $taste;
    public $weight;
    public $ingredients;

    public function __construct($_id, $_price, $_description, $_name, $_quantity, $_taste, $_weight, $_ingredients)
    {
        parent::__construct($_id, $_price, $_description, $_name, $_quantity);
        $this->taste = $_taste;
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
