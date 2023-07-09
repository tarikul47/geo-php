<?php

declare(strict_types=1);

// project folder 
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

// app folder 
define("APP_PATH", $root . 'app' . DIRECTORY_SEPARATOR);

// files path 
define("FILES_PATH", $root . 'transaction_files' . DIRECTORY_SEPARATOR);

// views file 
define("VIES_PATH", $root . 'views' . DIRECTORY_SEPARATOR);


require APP_PATH . 'App.php';
require APP_PATH . 'helper.php';

// all transaction files list in a directory 
$files = getTransactionFiles(FILES_PATH); // we get a one csv file 

$transactions = [];

// here we read data for every file and store in $transactions
foreach ($files as $file) {
    $transactions = array_merge($transactions, getTransactions($file, 'extractTransactions'));
}

$totals = calculateTotals($transactions);

//print_r($files);
//echo "<pre>";
//print_r($transactions); // 3.35

// transactions need show here 
require VIES_PATH . 'transactions.php';
