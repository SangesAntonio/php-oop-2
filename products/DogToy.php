<?php
require_once __DIR__ . '/../Product.php';
class DogToy extends product
{
    public $dimensions;
    public $weight;
    public $color;


    public function __construct($_dimension, $_weight, $_color, $_id, $_price, $_description, $_name, $_quantity)
    {
        parent::__construct($_id, $_price, $_description, $_name, $_quantity);
        $this->dimensions = $_dimension;
        $this->weight = $_weight;
        $this->color = $_color;
    }
}

$gioco_cane = new DogToy('20cm', '200gr', 'blue', '6GF7', 35, 'osso per cani di gomma', 'ossotto', 30);
