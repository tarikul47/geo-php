<?php

$dateTime = new DateTime('now', new DateTimeZone('Asia/Dacca'));
echo $dateTime->format('d/m/Y g:i A');
echo PHP_EOL;


$dateTime2 = new DateTime('now', new DateTimeZone('Indian/Chagos'));

echo $dateTime2->format('d/m/Y g:i A');
