<?php
class CreditCard
{
    public $owner_name;
    public $number_code;
    public $balance;
    public $expiration;

    public function __construct($_owner_name, $_number_code, $_balance, $_expiration)
    {
        $this->owner_name = $_owner_name;
        $this->number_code = $_number_code;
        $this->balance = $_balance;
        $this->expiration = $_expiration;
    }
}
