<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$products = 
[
    ["name" => 'banana', 'price' => 1, 'pieces' => 6],
    ["name" => 'apple', 'price' => 1.5, 'pieces' => 3],
    ["name" => 'wine', 'price' => 10, 'pieces' => 2]
];
            
$total = 0;            
$calculEdit = 0;

foreach($products as $index => $calculatePrice)
{
    $calcul = (($products[$index]['price']) * ($products[$index]['pieces']));
    $calculEdit = $calculEdit + $calcul;
   
}

echo "the total price is :  $calculEdit";



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
</body>
</html>