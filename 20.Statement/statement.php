<?php

/**
 * Strict_types enable 
 * 
 * declare(strict_types=1);
 * 
 * it works only for which file declare 
 * 
 */

/*
    function sum(int $x, int $y)
    {
        return $x + $y;
    }

    echo sum(2, 3); // 5 
*/

/*
    declare(strict_types=1);

    function sum(int $x, int $y)
    {
        return $x + $y;
    }

    echo sum(2, '3'); // fatal error 

    #note: expected a integer but gives string 
*/