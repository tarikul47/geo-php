<?php
//ini_set('display_errors', 1);

/* php.ini & configuration */

// error_reporting error_log, display_errors

var_dump(ini_get('error_reporting'));
//var_dump(ini_get('memory_limit'));
ini_set('memory_limit', '512M');


/**
 * example memory size issue 
 */

// $string = 'x';

// for ($i = 0; $i < 1000; $i++) {
//     $string .=$string;
// }

//echo $string;

phpinfo();
