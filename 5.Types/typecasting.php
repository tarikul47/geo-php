<?php

/* Data Types & Type Casting */

# 4 Scalar Types 
# bool = true | false 
$completed = false; // blank
$completed = true; // 1
# int = 1, 2, 3, 0, -5 (no decimal)
# float = 1.3, 0.1, 0.005 -15.6
# string = "Hello World" 

# $ Compound Types 
# array 
# object 
# callable 
# iterable

# 2 Special Types 
# resource 
# null = no value 

# 2 pseudo type
# mixed = Mixed means any value is returned
# void = Void means no value is returned


# how can get varibale type        
# gettype();
//echo gettype($completed);


# example 

function sum($x, $y)
{
    return $x + $y;
}

//echo sum(2, 3);


function sum1($x, $y)
{
    var_dump($x, $y);
    return $x + $y;
}

//echo sum1('2', 3); //  dynamically typecasting 


function sum2(int $x, int $y) // custom typecasting 
{
    var_dump($x, $y);
    return $x + $y;
}

//echo sum2('2', 3); //  dynamically typecasting 

//declare(strict_types=1);

// function sum3(int $x, int $y) // custom typecasting 
// {
//     var_dump($x, $y);
//     return $x + $y;
// }

// echo sum3('2', 3); //  won't take string tyype and gives fatal erorr 


function sum4(float $x, float $y) // custom typecasting 
{
    var_dump($x, $y);
    return $x + $y;
}

echo sum4(2, 4); //  works and gives fatal erorr 


$v = (int) '2';

var_dump($v);
