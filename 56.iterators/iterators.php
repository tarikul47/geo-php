<?php
require_once "Collection.php";
require_once "invoice.php";
require_once "InvoiceCollection.php";

$invoice = new Invoice(22);
$invoiceCollection = new InvoiceCollection([new Invoice(12), new Invoice(10), new Invoice(15)]);



foreach ($invoiceCollection as $key => $invoice) {
    //  echo "<pre>";
    //  print_r($key);
    // print_r($invoice);
    echo $invoice->id . ' - ' . $invoice->amount . "<br>";
}

//var_dump($invoice);