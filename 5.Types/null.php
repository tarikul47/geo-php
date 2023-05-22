<?php

/**
 * null defined 3 way 
 * 1. null constant 
 * 2. not assign any value in variable 
 * 3. 
 * 
 * null check = is_null() 
 *             = 3 equall check ( === )
 * 
 */

$x = null;

//echo "null = ".$x; // casting string and empty string 

$z = 5;

// unset($z); // when unset = after gives null

// var_dump($z); // 

//var_dump($y); // not assign any value but gives "null"

$x = null;

// casting null 

var_dump((int)$x); // int(0)
var_dump((bool)$x); // bool(false)
var_dump((array)$x); // array(0){}
