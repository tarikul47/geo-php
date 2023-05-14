<?php

// custom error class 
class MyException extends Exception
{
    public function getErrorMessage()
    {
        return "My Exception Message:" . $this->getMessage() . "<br> Error line number is " . $this->getLine() . "";
    }
}

$value1 = 3;
$value2 = 5;

try {
    if ($value1 < 0) {
        throw new Exception('The value is negative');
    }

    if ($value2 > 0) {
        throw new MyException('The value is possitive');
    }
} catch (Exception $e) {
    echo $e->getMessage();
} catch (MyException $e) {
    echo $e->getErrorMessage();
} finally {
    echo "Successfully excuted";
}
