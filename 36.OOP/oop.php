<?php

declare(strict_types=1);
include_once "Transaction.php";
$ammount = (new Tarnsaction(100, "Tarnsaction 1"))
    ->addTax(8)
    ->applyDiscount(8)
    ->getAmmount();

// class property access 
//$classMethods = get_class_methods('Tarnsaction');
//$classVars = get_class_vars('Tarnsaction');


echo "<pre>";
print_r($ammount);
