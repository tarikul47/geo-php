<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
/**
 *  <?php $marks = 50; ?>
    <?php if ($marks > 90) : ?>
    <?php elseif ($marks > 80) : ?>
    <?php else : ?>
    <?php endif; ?>

    Final
    #. if ():
    #. elseif():
    #. else:
    #. endif;
 */

?>

<body>
    <?php $marks = 50; ?>
    <?php if ($marks > 90) : ?>
        <h3>I am getting - <strong>A</strong> Grade.</h3>
    <?php elseif ($marks > 80) : ?>
        <h3>I am getting - <strong>B</strong> Grade.</h3>
    <?php else : ?>
        <h3>I am getting - <strong>F</strong> Grade.</h3>
    <?php endif; ?>
</body>

</html>



<?php

/**
 * <?php if ($marks >= 90) : ?>
        <strong>A</strong>
    <?php elseif ($marks >= 80) : ?>
        <strong>A-</strong>
    <?php elseif ($marks >= 70) : ?>
        <strong>B</strong>
    <?php elseif ($marks >= 60) : ?>
        <strong>C</strong>
    <?php else : ?>
        <strong>F</strong>
    <?php endif; ?>
 */
