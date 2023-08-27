<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use App\DB;
use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;
use App\Toaster\Toaster;
use App\Toaster\ToasterPro;

//use \Ramsey\Uuid\Uuid;
//$uuid = Uuid::uuid4();

// Paddle Transaction 
//$transaction = new Transaction();

// Status set 
//$transaction->setStatus(Status::PENDING);

// static property 
//echo Transaction::getCount();

// singleton design 
//$db = DB::getInstance([]);

// Toaster instance 
//$toaster = new ToasterPro();

//unset($toaster);

// add new toast 
//$toaster->addSlice('Bread');
//$toaster->toast();
//echo $toaster->title;

//echo "<pre>";
//print_r($db);
//var_dump($uuid);
