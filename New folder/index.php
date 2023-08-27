<?php
require_once "autoload.php";

use App\FileReaderCSV;

$csv_file = __DIR__ . '/data/demo.csv';

$csv = new FileReaderCSV();

echo "<pre>";
print_r($csv->getData());
