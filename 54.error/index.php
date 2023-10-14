<?php
require_once "invoice.php";
require_once "customer.php";
require_once "MissingBillingInfoException.php";

//set_exception_handler();

$invoice = new Invoice(new Customer());
try {
    $invoice->process(25);
} catch (MissingBillingInfoException $e) {
    echo $e->getMessage();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage(). ' '. $e->getFile() .' '. $e->getLine();
}
