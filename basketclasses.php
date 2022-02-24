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
        return ($this->price * $this->amount);
        
    }
    public function getTva()
    {
        return ($this->gettotal()/100* $this->tva);
    }
}


$product1 = new Product ('banana', 1, 6, 6);
$product2 = new Product ('apple', 1.5, 3, 6);
$product3 = new Product ('wine', 10, 2, 6);
echo ($product2 ->getTotal()) + ($product1 ->getTotal())+ ($product3->getTotal());
echo "<br>";
echo $product1 -> getTotal();
echo "<br>";
echo $product2 ->getTotal();
echo "<br>";
echo $product3 -> getTotal();
echo "<br>";
echo $product2-> getTva();

// echo getTotal()
//Could have created this with a foreach from basket.php

