<?php

class Student
{
    public $firstName, $lastName;
    private $course = "PHP";
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function __toString()
    {
        return serialize($this);
    }
    public function __sleep()
    {
        return ['course'];
    }
}

$raju = new Student('Raju', 'Ahmed');
echo $raju;
