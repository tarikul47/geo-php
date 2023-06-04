<?php

/**
 * Match 
 * #1. Syntax
 * #2. Return value 
 * #3. Comparison strictness
 * #4. Handling of no match 
 * #5. Fall-through 
 */

// Syntactical Differences 
#. Switch is a statement 
#. match is an expression 
#. macth must be termainated by semi-clone, but switch is not required 
#. match has multple expression (separated by comman)
#. match have single line expression value but swich can take many statement 
/*
    switch (subject) {
        case expression:
            // execute block of statement 
            break; // or contniue or return 

        default:
            // execute block of statement 
            break; // or contniue or return 
    }
*/


/*
    $result = match (subject) {
        expression1, expression2 => value,
        default => value
    };
*/

/*
    $subject = 'two';

    $result = match ($subject) {
        'one' => 'foo',
        'two' => function () {
            echo 2 + 3;
        },
        'three' => 'baz',
        default => 'default',
    };

    echo $result; // 'bar'
*/

/*
    $subject = 'two';

    switch ($subject) {
        case 'one':
            $result = 'foo';
            break;
        case 'two':
            $result = 'bar';
            break;
        case 'three':
            $result = 'baz';
            break;
        default:
            $result = 'default';
            break;
    }

    echo $result; // 'bar'

*/

#. we can keep retrun in switch 

/*
function getValue(string $subject)
{
    var_dump($subject);
    switch ($subject) {
        case 'one':
            return 'foo';
        case 'two':
            return 'bar';
        default:
            return 'baz';
    }
}

echo getValue(1); // 'foo'
echo getValue('two'); // 'bar'
echo getValue('non-existent'); // 'baz'

*/

#. Comparison Strictness
#. In a switch statement, comparisons are made based on loose/weak equality (==).

/*
switch (8.0) {
    case '8.0':
        $result = 'not expected';
        break;
    case 8.0:
        $result = 'expected';
        break;
}

echo $result; // 'not expected' 
#note = here not cheeking dat type that's why catch 1st block
*/


#. sion, comparisons are made based on strict equality (===)

/*
    echo match (8.0) {
        '8.0' => 'not expected',
        8.0 => 'expected',
    }; // 'expected'
*/