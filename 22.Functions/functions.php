<?php

/**
 * return type set in functionsa
 * return type can be 
 * - int | string | array = mixed 
 * - void = Nothing 
 * - 
 * if set only retrun in funtion then it gives = null 
 */

#1. 

/*
    function foo(): int
    {
        return 1;
    }

    var_dump(foo()); // int (1)
*/

#2.
/*
    function foo(): int
    {
        return '1'; //  1 string cast to integer 
    }

    var_dump(foo()); // int (1)
*/

#3. 

/*
    function foo(): int
    {
        return [];
    }

    var_dump(foo()); // fatal error expected return int but has []
*/

#. Note: #2 although expected integer but set string 
#. - There is not showing error on frontend 
#. - for this case we can enable strict types
#. - declare(strict_types=1)
#. - then gives an fatal error 


/*
    declare(strict_types=1);
    function foo(): int
    {
        return '1'; //  1 string cast to integer 
    }

    var_dump(foo()); // int (1)
*/

/*
    function foo(): void
    {
        return; //  expeected nothing to return 
    }
*/

/*
    function foo(): void
    {
        return null; // Fatal erro, expeected nothing to return [ null also a value]
    }
*/

/*
    function foo(): ?int
    {
        return null; //  
    }

    var_dump(foo());
*/

#.Note: if we want to set return type null or int = ?int 
#. - return null;
#. - return 7;

/*
    function foo(): int|float|array
    {
        return []; //  
    }

    var_dump(foo());
*/

/*
    function foo(): mixed
    {
        return []; //  
    }

    var_dump(foo());
*/