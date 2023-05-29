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
$x = "Hello World";
$y = strpos($x, 'H');
var_dump($y == false);

if ($y === false) {
    echo "H is not found";
} else {
    echo "H is at index " . $y;
}

 // Error Control Operators (@)

 // Increment/Decrement Operators (++ --)

 // Logical Operators (&& || and or xor)

 // Bitwise Operators (& | ^ ~ << >>)

 // Array Operators (+ == === =! <> ==!)

 // Executions Operators (``)

 // Type Operators (instance of )

 // Nullsafe Operators PHP8 (?)