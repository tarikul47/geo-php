<?php

$iscompleted = false;

# integer 0 -0 = false 
# float 0.0 -0.0 = false
# '' = false 
# '0' = false
# [] = false
# null = false

echo $iscompleted;

if ($iscompleted) {
    // do something 
    echo 'Success';
} else {
    echo 'fail';
}
