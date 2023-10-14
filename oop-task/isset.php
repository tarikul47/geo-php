<?php

class Student
{
    public $firstName = 'Raju';
    public $lastName = 'Ahemd';
    private $course = "PHP";

    public function __isset($property)
    {
        return isset($this->$property);
    }
}

$raju = new Student();

echo isset($raju->course);
