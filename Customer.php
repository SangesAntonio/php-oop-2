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
