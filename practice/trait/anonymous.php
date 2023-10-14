<?php

/**
 * Interface 
 */

interface ParentInterface
{
    public function test2();
}

/**
 * Abstract class 
 */

abstract class ParentAbastract
{
    public $name = 'Tarikul';

    abstract public function call();
}

/**
 * Class 
 */

class ParentClass
{
    public function test1()
    {
        echo "Test1 method in parent class <br>";
    }
}

/**
 * Anonymous class 
 */

$obj = new class() extends ParentClass implements ParentInterface

{
    public function __construct()
    {
        echo "Anonymous class run <br>";
    }

    public function test2()
    {
        echo "Anonymous class run from Implements <br>";
    }
};

// test method call
$obj->test1();
$obj->test2();
