<?php

/**
 * Controls Statement 
 * 
 * elseif || else if =  both correct
 *  - but need to keep in mind both correct in php 
 *  - when html then need set elseif (else if not work )
 * 
 * <?php if():?>
 * <?php elseif():?>
 * <?php endif?>
 */

$marks = 99;

if ($marks >= 90) {
    echo "A";
    if ($marks >= 95) {
        echo "+";
    }
} elseif ($marks >= 80) {
    echo "A-";
} elseif ($marks >= 80) {
    echo "B";
} elseif ($marks >= 70) {
    echo "B-";
} elseif ($marks >= 60) {
    echo "C";
} else {
    echo "F";
}
