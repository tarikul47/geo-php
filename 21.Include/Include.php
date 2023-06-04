<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    ob_start();
    include "partials/nav.php";
    $nav = ob_get_clean();
    echo $nav;
    // var_dump($nav); // string 

    ?>
    <h1>Home</h1>
    <h1>Hello from the home page!</h1>
</body>

</html>


<?php

/**
 * <?php include "partials/nav.php"; ?> = html render 
 * 
 * we can render as string 
 * 
 * ob_start();
    include "partials/nav.php";
    $nav = ob_get_clean();
    echo $nav;
   // var_dump($nav); // string 
 */

?>