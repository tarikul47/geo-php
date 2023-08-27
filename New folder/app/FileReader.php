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

    public function getData(): mixed
    {
        if (!is_readable($this->getFileName())) {
            throw new Exception('file [' . $this->filename . '] is not readable');
        }

        return $this->readData($this->filename);
    }

    public function getFileName(): string
    {
        return $this->filename;
    }

    protected abstract function readData($filename);
}
