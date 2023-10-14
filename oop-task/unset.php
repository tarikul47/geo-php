<?php

class Student
{
    public $firstName = 'Raju';
    public $lastName = 'Ahemd';
    private $course = "PHP";

    public function __unset($property)
    {
        unset($this->$property);
    }
}

$raju = new Student();

unset($raju->course);
