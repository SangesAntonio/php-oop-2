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

$cibo_1 = new Catfood('fdd25', 8, 'Cibo per gatti', 'Micio buono', 10, 'Pollo e tonno', '70gr', 'Pollo, tonno, latte, riso');
