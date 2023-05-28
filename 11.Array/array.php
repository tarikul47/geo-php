<?php

/**
 * Array data type dicussion
 *  
 * - String = we can use negative index 
 * - Array =  can't user negative index 
 * 
 *  undefined key =  return null 
 * 
 * array count =  count()
 *  added array element = $array[] = 'new value'
 *  - array_push();
 */

<<<<<<< HEAD
$name = "Tarikul";
$programmingLanguage = ['PHP', 'JAVA', 'CSS'];

// check array element 
//echo "<pre>";
//print_r($programmingLanguage);

// check specific element 
//echo $programmingLanguage[1];

// undefined index check 
//echo $programmingLanguage[5];

// negative index and get last string 
//echo $name[-1];

// element replace 
//$programmingLanguage[1] = 'C++';

// element added 
//$programmingLanguage[] = 'Python';

// array elememt count 
//echo count($programmingLanguage);

// element added 
//array_push($programmingLanguage, 'Javascript');

// check array element
//echo "<pre>";
//print_r($programmingLanguage);

// $programmingLanguage = array(
//     'php' => 'PHP',
//     'java' => 'JAVA',
// );

//$programmingLanguage['go'] = "GO";

//$css = 'css';
//$programmingLanguage[$css] = $css;


$programmingLanguage = array(
    'php' => [
        'creator' => 'A Man',
        'extension' => 'php',
        'website' => 'www.php.com',
        'versions' => [
            ['version' => 3.6, 'releaseDate' => 'Oct 5,2020'],
            ['version' => 3.6, 'releaseDate' => 'Oct 5,2020'],
        ]
    ],
    'java' => [
        'creator' => 'A Man of Java',
        'extension' => 'java',
        'website' => 'www.java.com',
        'versions' => [
            ['version' => 3.6, 'releaseDate' => 'Oct 5,2020'],
            ['version' => 3.6, 'releaseDate' => 'Oct 5,2020'],
        ]
    ],
);

//echo $programmingLanguage['php']['website'];
//echo $programmingLanguage['php']['versions'][0]['releaseDate'];

//echo "<pre>";
//print_r($programmingLanguage);

// null key = blank 
// same key = php always try to cast 
//$array = [true => 'a', 1 => 'b', '1' => 'c', 1.6 => 'e', null => 'f'];
//print_r($array);

// null key element print 
//echo $array[null];
//echo $array[''];

// after big integet then follow it 
$array_1 = ['a', 'b' => null, 50 => 'c', 'd', 'e', 'f',];

// array element remove 
// array_pop()
// array_shift()
//print_r($array_1);

//echo array_pop($array_1);  // last element remove
//echo array_shift($array_1); // 1st element remove 
//unset($array_1[3]); // 1st element remove 

var_dump(array_key_exists('b', $array_1)); // true 
var_dump(isset($array_1['b'])); // false = check value of key 

print_r($array_1);


// array_key_exit() 
=======
 echo "Array";
>>>>>>> 1cdd875742975791af13b7eab55547610683ed2e
