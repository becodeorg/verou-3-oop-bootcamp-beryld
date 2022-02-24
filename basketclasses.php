<?php

class Product
{
    public $name;
    public $price;
    public $tva;

    public function __construct($name, $price, $amount, $tva)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->tva = $tva;
    }
    public function getTotal()
    {
        
    }
    public function getTva()
    {

    }
}


$product1 = new Product ('banana', 1, 6, 6);
$product2 = new Product ('apple', 1.5, 3, 6);
$product3 = new Product ('wine', 10, 2, 6);
//Could have created this with a foreach from basket.php

