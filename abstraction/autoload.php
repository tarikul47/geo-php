<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . "/" . lcfirst($class) . '.php';
    require_once $path;
});
