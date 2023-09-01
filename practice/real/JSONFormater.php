<?php

class JSONFormater implements DataFormaterInterface
{
    public function getContent(Book $book)
    {
        $array = array('book' => $book);
        return json_encode($array);
    }
}
