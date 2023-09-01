<?php

namespace App;

class FileReaderCSV extends FileReader
{
    public function readData($filename)
    {
        $fp = fopen($filename, 'r');

        $return_value = [];

        while ($data = fgetcsv($fp, '4096',',')) {
            $p = new Product();
            $p->name = $data[1];
            $p->code = $data[0];
            $p->price = $data[2];
            $p->exp_date = $data[3];
            $return_value[] = $p;
        }
        fclose($fp);
        return $return_value;
    }
}
