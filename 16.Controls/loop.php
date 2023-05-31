<?php

/**
 * while loop
 * condition true = it runs 
 * condition false =  it never run inshallah
 * if we set condition true = alwyas it runs 
 * 
 * but usecase = needs to run and wait for something 
 *  #. condition is true 
 *  #. when x vlue 15 is greater than 15 then it break 
 * 
 * break lable default 1 but can set customly 
 * 
 * continue statement
 * 
 * while(): endwheil
 * 
 */

#1.
//$x = 0;

// while ($x <= 15) {
//     echo $x++ . "\n"; //  1 to 15
// }

#2.

// while (true) {
//     if ($x > 15) {
//         break;
//     }
//     echo $x++ . "\n"; // 1 to 15
// }

#3.

// while (true) {

//     if ($x > 15) {
//         break;
//     }

//     while ($x > 5) {
//         break 2; 
//     }
//     echo $x++ . "\n"; //  1 to 5
// }

#4. odd number 

// while ($x <= 15) {
//     if ($x % 2 === 0) {
//         $x++;
//         continue;
//     }
//     echo $x++ . "\n"; //  1 to 5
// }


#5. even number 

// while ($x <= 15) { 
//     if ($x % 2 !== 0) { 
//         $x++;
//         continue;
//     }
//     echo $x++ . "\n"; //  1 to 5
// }



/**
 * do while loop
 */
//$d = 0;

// do {
//     echo $d++ . "\n";
// } while ($d <= 15);

/**
 * for loop
 */

#1. 

$f = 0;

// for ($f = 0; $f <= 15; $f++) {
//     echo $f;
// }

#2. infinite loop 

// for (; ; $f++) {
//     echo $f;
// }

#3. 
$text = ['a', 'b', 'c', 'd'];

// for ($f = 0; $f < count($text); $f++) { //  it's not a good practice count() set here
//     echo $text[$f] . "\n";
// }
// $length = count($text);
// for ($f = 0, $length = count($text); $f < $length; $f++) { //  it's a good practice count() set here
//     echo $text[$f] . "\n";
// }


/**
 * foreach loop
 *  $language we can use reference so that we can modify orginal array 
 * 
 * after foreach complete but still keep alive the varibale 
 */

$programming_lnaguage = ['php', 'java', 'css'];

#1. 
// foreach ($programming_lnaguage as $key => $language) {
//     echo $key . "=>" . $language . "<br>";
// }

#2. 

// foreach ($programming_lnaguage as $key => &$language) {
//     $language = "Raju";
//     // echo $key . "=>" . $language . "<br>";
// }

// print_r($programming_lnaguage); //  modified language


#3. 

// foreach ($programming_lnaguage as $key => $language) {
//     echo $key . "=>" . $language . "<br>";
// }

// echo $language; // last element show 


#4. 

// foreach ($programming_lnaguage as $key => $language) {
//     echo $key . "=>" . $language . "<br>";
// }

// unset($language);
// echo $language; // undefined variable  


#5. 

$users = [
    'name' => 'tarikul',
    'email' => 'tarikul@gmail.com',
    'skills' => ['php', 'java', 'css'],
];

// foreach ($users as $key => $value) {
//     echo $key . "=>" . $value . "<br>"; // error Array to string 
// }


#6. 
// foreach ($users as $key => $value) {
//     //echo $key . "=>" . json_encode($value) . "<br>"; // error Array to string 

//     var_dump(json_encode($value)); // string when json_encode 
//    // var_dump($value); // string and array  
// }

// foreach ($users as $key => $value) {
//     if (is_array($value)) {
//         $value = implode(', ', $value);
//     }
//     echo $key . "=>", $value . "<br>";
// }

#. array we can print by implode();


#7. 

foreach ($users as $key => $value) {
    echo $key . " => ";

    if (is_array($value)) {
        foreach ($value as $skill) {
            echo $skill . ' - ';
        }
    } else {
        echo $value . "<br>";
    }
}
