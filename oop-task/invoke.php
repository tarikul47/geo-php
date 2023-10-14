<?php

class Calculation
{
    public $a, $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function __invoke()
    {
        $arguments = func_get_args();
        print_r($arguments);
      //  echo "Adding something";
    }
}

$add = new Calculation(4, 5);
$add(3, 4, 5);
