<?php
class Customer
{
    public $first_name;
    public $last_name;
    public $customer_id;

    public function __construct($_first_name, $_last_name, $_customer_id)
    {
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->customer_id = $_customer_id;
    }
}

$customer1 = new Customer('Antonio', 'Sanges', '022');
var_dump($customer1);
