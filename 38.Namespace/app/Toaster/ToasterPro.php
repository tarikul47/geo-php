<?php

namespace App\Toaster;

class ToasterPro extends Toaster
{
    public int $size = 4;

    public function __construct()
    {
        $this->title = 'Raju Ahmed';
        parent::__construct();
        // echo "Toaster";
    }

    public function addSlice(string $slice): void
    {
        parent::addSlice($slice);
        echo "helloo";
    }

    public function __destruct()
    {
        parent::__destruct();
        echo "Destruct toaster pro";
    }
}
