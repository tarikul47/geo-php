<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . "/" . lcfirst($class) . '.php';
    require_once $path;
});

$book = new Book("PHP", 'Raju', 'Web');
$json = new JSONFormater();

echo $book->getInfo($json);
