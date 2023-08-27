<?php

namespace App;

use Exception;

abstract class FileReader
{
    private $filename;
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getData()
    {
        if (!is_readable($this->getFileName())) {
            throw new Exception('File [' . $this->getFileName() . '] is not readbale !');
        }
        return $this->readData($this->getFileName());
    }

    public function getFileName()
    {
        return $this->filename;
    }

    protected abstract function readData($filename);
}
