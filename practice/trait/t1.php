<?php

use UserProfile as GlobalUserProfile;

interface LoggerInterface
{
    function log($log_message);
}

class DatabaseLogger implements LoggerInterface
{
    public function log($log_message)
    {
        echo "To Database: " . $log_message . "<br>";
    }
}
class FileLogger implements LoggerInterface
{
    public function log($log_message)
    {
        echo "To FileLogger: " . $log_message;
    }
}

trait LoggerExtraTrait
{
    protected $logger;
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log($log_message)
    {
        if ($this->logger) {
            $this->logger->log($log_message);
        }
    }
}
class SocketStream
{
    protected $logger;
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log($log_message)
    {
        if ($this->logger) {
            $this->logger->log($log_message);
        }
    }
}

class UserProfiles
{
    use LoggerExtraTrait;
}

$socketStream = new SocketStream();
$userProfile = new UserProfiles();
$userProfile->setLogger(new DatabaseLogger());
$socketStream->setLogger(new DatabaseLogger());
$userProfile->log('User profile addedd');
$socketStream->log('User profile addedd');



// Pass Lambda to function
function shout($message)
{
    var_dump($message);
   // echo $message();
}

// Call function
shout(function () {
    echo "Hello world";
});
