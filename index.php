<?php
include __DIR__ . '/Customer.php';
include __DIR__ . '/products/catFood.php';
include __DIR__ . '/products/DogToy.php';


$creditcard_1 = new Creditcard('Antonio Sanges', 44333556677, 455, '12/ 01');
$customer1 = new Customer('Antonio', 'Sanges', 022, $creditcard_1);


var_dump($customer1);
var_dump($cibo_1);
