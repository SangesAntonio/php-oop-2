<?php
require_once __DIR__ . '/Creditcard.php';
class Customer
{
    public $first_name;
    public $last_name;
    public $customer_id;
    public $creditcard;

    public function __construct($_first_name, $_last_name, $_customer_id, $_creditcard)
    {

        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->customer_id = $_customer_id;
        $this->creditcard = $_creditcard;
    }
}

$creditcard_1 = new Creditcard('Antonio Sanges', 44333556677, 455, '12/ 01');
$customer1 = new Customer('Antonio', 'Sanges', 022, $creditcard_1);
