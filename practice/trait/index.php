<?php

trait LoggerTrait
{
    protected $logger;
    public function log($message)
    {
        $this->logger = $message;
        echo $this->logger . "<br>";
    }
}

class UserProfile
{
    use LoggerTrait;
}

class Companyprofile
{
    use LoggerTrait;
}

$userProfile = new UserProfile();
$Companyprofile = new Companyprofile();

//$userProfile->log('User created is Successfully');
//$Companyprofile->log('Company created is Successfully');

include_once('t1.php');
