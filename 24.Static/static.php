<?php

/**
 * Variable scope 
 * - global scope
 *      - use by global 
 *      - $GLOBAL['key']
 *      - by argument in function
 *      - after defined global varibe can accress include or requre file 
 * - Local scope 
 * 
 * -  Static variable 
 *      - generaly a function after call all destoryed varibale in the function
 *      - but static varibale stored last value 
 * 
 */

/*
    $x = 5;
    function foo()
    {
        return $x; // try to access global varibale 
    }

    echo foo();
*/

/*
    $x = 5;
    function foo($x)
    {
        return $x; // try to access global varibale 
    }

    echo foo($x);
*/

/*
    $x = 5;
    function foo()
    {
        $x = 10;
        return $x; // get local variable 
    }

    echo foo($x);
*/

/*
    $x = 5;
    function foo($x)
    {
        global $x;
        return $x; // try to access global varibale 
    }

    echo foo($x);
*/

/*
    $x = 5;
    function foo()
    {
        $GLOBALS['x'] = 10;
        echo  $GLOBALS['x']; // try to access global varibale 
    }

    echo foo();
*/