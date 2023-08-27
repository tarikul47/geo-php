<?php

namespace App\Toaster;

class Toaster
{
    public array $slices = [];
    public int $size = 2;
    public string $title;

    public function __construct()
    {
        $this->title = 'Raju';
     //   echo "Toaster";
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . '<br>';
        }
    }

    public function getSize()
    {
        return $this->size;
    }

    public function __destruct()
    {
        echo "Destrructing calling on Toaster";
    }
}
