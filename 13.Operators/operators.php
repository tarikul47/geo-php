<?php

/**
 * operator 
 * #. take one value = Uniarry operator (!)
 * #. take two values = Binarry operators ( most of binarry | require two operand )
 * #. take three values =  ternarry operators (?:)
 * 
 * complex operation where has many operator 
 *  #. works depend on operator precendency ( ) >> / >> * >> + >> -
 *  #. when multiple time + + then works ( operator associativity ) left ot right 
 *  
 * Division operator always give float type data 
 *  - fdiv(10/0) = float(INF) [ 10 divided by 0 = result inf but gives fatal erro to hide it ]
 * Addition always give integer | float type 
 */
//echo "operators_autoload_files";

// Arithmetic Operators (+ - */ % **)
#. Indentity ( + ) = +a ( convert to int or float )
#. Negation ( - ) = -q (convert to positive or negative )
#. Addition ( + ) = $x + $y
#. Subtraction ( - ) = $x - $y
#. Multiplication ( * ) = $x * $y 
#. Division ( / ) = $x / $y
#. Exponentiation ( ** ) = X^2 || $x**2
#. Modulo (%)
#. float type data 
#. 10.6 % 2. 9 = reminder return 0 
#. fmod($x, $y) = acurate result for modulo 
# 10 % 3 = 1 | -10 % 3 = -1 [ 10 is divided  ]

// Assignment Operators (= += -= /= %= **=)
#. $x = $x + 3 | $x += 3;  
//$y = 6;
//$y = $y + 10;
//$y += 220;
//echo $y;

// String Operators (. .=)
#. concatenation = .
#. concatenation with assign = .=

//$x = "Hello";
//$x .= " World";

//echo $x;

// Comparison Operatprs (== === ==! <> < > <= => <=> ?? ?:)
#. strict mood
//$x = "Hello World";
//$y = strpos($x, 'H');
//var_dump($y == false);

// if ($y === false) {
//     echo "H is not found";
// } else {
//     echo "H is at index " . $y;
// }

/**
 * Error Control Operators (@)
 */
#. Error can hide @ 
//$file  = @file('test.ptxt'); // 
//var_dump($file);

/**
 * Increment/Decrement Operators (++ --)
 * $x++ =  first return then increment 
 * ++$x = first increment then return
 * $x-- = first return then decrement 
 * --$x = first decrement then return 
 */
//$x = 5;
//echo $x++ . "<br>"; // 5
//echo ++$x . "<br>"; // 7 
//echo $x-- . "<br>"; // 7
//echo --$x . "<br>"; // 5

/**
 * Logical Operators (&& || and or xor)
 * ----------------------------------------
 */
//$x = true;
//$y = false;
//var_dump($x && $y); //  both needs true
//var_dump($x and $y); //  both needs true
//var_dump($x || $y); //  one needs true
//var_dump($x or $y); //  one needs true

//$b = true;
//$c = false;
//$a = $b and $c; // here presendence = >> and 
//var_dump($a);

// $x = true;

// function hello()
// {
// echo " Hello Fun";
//     return false;
// }

//var_dump($x &&  hello() || true); // $x && hello() = false || true = true

/**
 * Bitwise Operators (& | ^ ~ << >>)
 * -----------------------------------
    #. & = and Bit 
    #. | = or Bit
    #. ^ = Xor Bit 
    #. << = Left shift 
    #. >> = Right Shift  

    #left shift 
        - Value increase 5 << 2 = 101 << 2 gor left 
        = 10100 = 20 
        = cilo 5 bit = 101 then 2 left mean left side 2 gor barbe 
        = 10100 = 2 gor left sore jeye right side 2 ta 00 barce 
        = final result 10100 =  20

    # right shift 
        - value decrease 
        - 5 >> 2 
        - 2 gor kmome jbe 
        - 5 = 101 
        -  so 2 gor right shif mean last 01 remove 
        - result = 1 
 */

// & = and bit ( binarry number with and operation )
//echo decbin(5); // 101
//echo decbin(6); // 110
//decho decbin(15); // 1111
//echo decbin(7); // 111 
//echo decbin(1); // 0001 

//echo 5&1; // 001 
//echo 6&1; // 000
//echo 20 & 1; // 000

// function orEvenOdd($num)
// {
//     return $num & 1 ? 'Odd' : 'Even';
// }

//echo decbin(8); // 1000 & 0001 = 0 // false 
//echo decbin(7); // 111 & 001 = 1 // true 
//echo decbin(20); // 10100
//echo decbin(19); // 10011 
// echo decbin(4); // 10011 
//var_dump(orEvenOdd(8));


/**
 * Array Operators (+ == === =! <> ==!) 
 */

// $x = ['a', 'b', 'c'];
// $y = ['d', 'e', 'f', 'g'];

// $z =  $x + $y;

// echo "<pre>";
// print_r($z); // firsr array print ['a', 'b', 'c']


$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7];

$z =  $x + $y;

echo "<pre>";
print_r($z); // firsr array print ['a', 'b', 'c']


 // Executions Operators (``)

 // Type Operators (instance of )

 // Nullsafe Operators PHP8 (?)