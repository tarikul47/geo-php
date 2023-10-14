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
    public function __sleep()
    {
        return ['course','firstName'];
    }
}

$raju = new Student('Raju', 'Ahmed');
$data = serialize($raju);
$obj = unserialize($data);
//echo $data;
echo $raju->firstName;
echo $obj->firstName;
