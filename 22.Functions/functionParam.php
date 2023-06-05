<?php

/**
 * function has parameter and arguments
 * - decalre with parametert
 * - call with arguments
 */
/*
    function foo(int|float $x, int|float $y)
    {
        return $x * $y;
    }

    echo foo(2, 3);
*/


/*
    function foo(int|float $x, int|float $y = 3)
    {
        return $x * $y;
    }

    echo foo(2);
*/

#Note = required and optional parameter


/*
    function foo(int|float $x, int|float $y = 3, $z)
    {
        return $x * $y;
    }

    echo foo(2, , 3); // there is no way skip 2nd parameter 
*/

#Note= all optional parameter need to set lastly 


/**
 * There is two way we can pass argument 
 * - passed by value 
 * - passed by reference 
 * - generally as argument passed by value 
 * - we can set reference = by & (amper sign )
 */

#1 = passed by value 

/*
    function foo(int|float $x, int|float $y): int|float
    {
        if ($x % 2 === 0) {
            $x /= 2; // here we set x value is 3 
        }
        return $x * $y;
    }

    $a = 6.0;
    $b = 7;

    echo foo($a, $b);

    echo "<br>";

    var_dump($a, $b); // here still x value is 6

*/

#Note: Although we modify x value but parent x is still same 
#. because $a value set as a passed by value 

/*
    function foo(int|float &$x, int|float $y): int|float 
    {
        if ($x % 2 === 0) {
            $x /= 2; // here we set x value is 3 
        }
        return $x * $y;
    }

    $a = 6.0;
    $b = 7;

    echo foo($a, $b); // $a value set as reference 

    echo "<br>";

    var_dump($a, $b); // here x value is 3
*/


#Note: By amper sign we modify $a value by this function 


/**
 * multiple parameter set in function
 * splat operator  = ...$numbers
 */

/*
function foo(...$numbers): int|float // splat operator 
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo foo(4, 6, 6, 8);
*/


/*
function foo(...$numbers): int|float // splat operator 
{
    return array_sum($numbers);
}

echo foo(4, 6, 6, 8);
*/


/*
    function foo(int|float $x, int|float $y, int|float ...$numbers): int|float // splat operator 
    {
        return $x + $y + array_sum($numbers);
    }

    echo foo(4, '6', '6', 8); // '6' cast 6 but if enable strict type the gives fatal error 
    */
/*
    $numbers = [1, 2, 3, 4];
    var_dump(...$numbers);
*/

/*
    function foo(int|float $x, int|float $y, int|float ...$numbers): int|float // splat operator 
    {
        return $x + $y + array_sum($numbers);
    }
    $numbers = [1, 2, 3, 4];

    echo foo(4, 6.0, ...$numbers);
*/

/**
 * named argument
 * - setcookie()
 * - there are many paramenter but if we need 1st and last parameter need to set
 * - we can use argument name 
 * - setcookie(name:'foo', value:'bar', httponly: true);
 * - we just set 3 parameter and not following ordering becuase we have named argument  
 */

/*
    function foo(int $x, int $y): int
    {
        if ($x % $y === 0) {
            return $x / $y;
        }
        return $x;
    }

    $x = 6;
    $y = 3;

    echo foo($y, $x); // The way $y is $x and $x is $y 
    echo "<br>";
    echo foo(y: $y, x: $x); // The way $y is $x and $x is $y 
*/
#note: argument order in important if here we miss then it doesn't give expected result
#. - we can set argument name  

/*
    function foo(int|float $x, int|float $y): int|float // splat operator 
    {
        var_dump($x, $y); // 1, 2 
        return $x + $y;
    }
    $numbers = ['y' => 2, 'x' => 1];

    echo foo(...$numbers); // here associative array key treat as named argument 
*/