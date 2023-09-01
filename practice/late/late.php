<?php

/**
 * Late Binding 
 * 
 * parent class static variable generally we call by self:: 
 * but if we want to extends then self alwasy call parent class 
 * 
 * - static:: if we use then we can overrid static variable 
 */

class Base
{
    protected static $name = "Raju";

    public function show()
    {
        echo static::$name . "<br>";
    }

}

class Child extends Base
{
    protected static $name = "Tarikul";
}

// parent class 
$base = new Base();
$base->show(); //  Raju 

$child = new Child();
$child->show() . '<br>'; //  Tarikul [when use static:: ] ;