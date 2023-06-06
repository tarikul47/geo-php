<?php

/**
 * varibale, anonymous & arow functions 
 */

#1. 
/*
    $numbers = [1, 2, 3, 4];
    function sum(int|float ...$numbers): int|float
    {
        return array_sum($numbers);
    }

    $x = 'sum';

    echo sum(...$numbers);
    echo $x(...$numbers); // $x =  sum 

    if (is_callable($x)) { // check wheather it exist or not
        echo $x(...$numbers);
    } else {
        echo "not collable";
    }
*/

/**
 * Anonymous funcion | closure or lambda function
 * one time use 
 * it's called an expression, that's why need to end with semi clone
 * 
 * global varibale use by use keywword 
 */

/*
    $globa_variable = 10;
    $numbers = [1, 2, 3, 4];
    $sum = function (int|float ...$numbers) use (&$globa_variable): int|float {
        $globa_variable = 20; // try to modified [ use here amper sign so we can modify]
        return $globa_variable + array_sum($numbers);
    };
    echo $sum(...$numbers);
    echo $globa_variable; // modified varibale 
*/

/**
 * Callable functions 
 */

#1. 

/*
    $numbers = [1, 2, 3, 4];

    $sum = array_map(function ($elment) {
        return $elment * 2;
    }, $numbers);

    var_dump($sum);
*/

/*
    $numbers = [1, 2, 3, 4];

    $fuc = function ($elment) {
        return $elment * 2;
    };

    $sum = array_map($fuc, $numbers);

    var_dump($sum);
*/

/*
    $numbers = [1, 2, 3, 4];

    function foo($elment)
    {
        return $elment * 2;
    };

    $sum = array_map('foo', $numbers);

    var_dump($sum);
*/

/*
    $numbers = [1, 2, 3, 4];
    $sum = function (callable $callable, int|float ...$numbers) use (&$globa_variable): int|float {
        return $callable(array_sum($numbers));
    };
    echo $sum('foo', ...$numbers);


    function foo($elment) // $element = 10
    {
        return $elment * 2; // 10 * 2 = 20
    };
*/

/**
 * Arrow function
 */

/*
    $array = [1, 2, 3, 4];

    //$array2 = array_map(fn ($number) => $number * $number, $array);
    $array2 = array_map(fn ($number) => $number * $number, $array);

    var_dump($array2);
*/

/*
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    $oddNumbers = array_map(function ($value) {
        return $value % 2 !== 0 ? $value : null;
    }, $num);

    $oddNumbers = array_filter($oddNumbers);

    print_r($oddNumbers);
*/
/*
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    $oddNumbers = array_filter($num, fn ($value) => $value % 2 !== 0);

    print_r($oddNumbers);
*/