<?php
//$a = new stdClass;
//print_r($a);

//$json = '{"foo":"bar", "number": 42}';

//$stdInstance = json_decode($json, true);

//print_r($stdInstance);

//echo $stdInstance->foo;

// class Example
// {

//     private $options;

//     public function __construct(array $setup)
//     {
//         // casting Array to stdClass object
//         $this->options = (object) $setup;

//         // access stdClass object in oop style - here transform data in OOP style using some custom method or something...
//         echo $this->options->{'name'}; // ->{'key'}
//         echo $this->options->surname;  // ->key
//     }
// }

//$ob1 = new Example(["name" => "John", "surname" => "Doe"]);


declare(strict_types=1);

class Tarnsaction
{

    private float $ammount;
    private string $description;

    public function __construct(float $ammount, string $description)
    {
        $this->ammount = $ammount;
        $this->description = $description;
    }

    public function addTax(float $rate): Tarnsaction
    {
        $this->ammount += $this->ammount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Tarnsaction
    {
        $this->ammount -= $this->ammount * $rate / 100;
        return $this;
    }

    public function getAmmount(): float
    {
        return $this->ammount;
    }

    public function __destruct()
    {
        
    }
}
