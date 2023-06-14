<?php
include_once "helper.php";
/**
 * PHP array_chunk() Function
 * #. An array divided with size 
 * 
 * Array
(
    [0] => Array
        (
            [0] => Volvo
            [1] => BMW
            [2] => Toyota
        )

    [1] => Array
        (
            [0] => Honda
            [1] => Mercedes
            [2] => Opel
        )

)
 * 
 */

/* 
    $cars = array(
        "Volvo",
        "BMW",
        "Toyota",
        "Honda",
        "Mercedes",
        "Opel"
    );

    preArray(
        array_chunk($cars, 3)
    );
*/

/**
 * PHP array_combine() Function
 * multiple array we can combine
 * #. Need to same element in both array 
 * 
 * Array
(
    [Peter] => 35
    [Ben] => 37
    [Joe] => 43
)
 */

/*
    $fname = array("Peter", "Ben", "Joe");
    $age = array("35", "37", "43");

    preArray(
        array_combine($fname, $age)
    );
*/

/**
 * PHP array_diff() Function
 * - This function compares the values of two (or more) arrays
 * - array_diff(array1, array2, array3, ...)
 * - return an array that contains the entries from array1 that are not present in array2 or array3, etc.
 */

/*
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue", "i" => "raju");

    preArray(
        array_diff($a1, $a2)
    );
*/


/**
 * PHP array_diff_assoc() Function
 * - Compare the keys and values of two arrays, and return the differences
 * - comapre with key and value 
 * Array
(
    [c] => blue
    [e] => yellow
)
 */

/*
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "e" => "yellow");
    $a2 = array("a" => "red", "b" => "green", "c" => "yellow", "g" => "blue");

    preArray(
        array_diff_assoc($a1, $a2)
    );
*/

/**
 * PHP array_keys() Function
 */

 /*
    $a = array(
        "Volvo" => "XC90",
        "BMW" => "X5",
        "Toyota" => "Highlander"
    );
    preArray(
        array_keys($a)
    );
    preArray(
        array_keys($a, 'Highlander')
    );


    $a = array(10, 20, 30, "10");

    preArray(
        array_keys($a, '10')
    );

    $a = array(10, 20, 30, "10");

    preArray(
        array_keys($a, '10', true)
    );
*/