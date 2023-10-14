<?php

class Person
{
    private $firstName;
    private $lasttName;

    private function setName($firstName, $lasttName)
    {
        $this->firstName = $firstName;
        $this->lasttName = $lasttName;
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
        } else {
            echo "This is not exisitng method: {$name}";
        }
    }
}


$raju = new Person('Raju', 'Ahemd');
$raju->setName('Abdur', ' Rahman');

print_r($raju);
