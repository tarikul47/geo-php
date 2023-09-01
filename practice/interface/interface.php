<?php

class Book
{
    public $title;
    public $author;
    public $category;

    public function __construct($title, $author, $category)
    {
        $this->title = $title;
        $this->author = $author;
        $this->category = $category;
    }

    public function getInfo($type)
    {
        $info = '';
        switch ($type) {
            case 'JSON':
                $array = array('book' => $this);
                $info = json_encode($array);
                break;
            case 'XML':
                $info = '<content>';
                $info .= '<book_title>' . $this->title . '<book_title>';
                $info .= '<book_title>' . $this->author . '<book_title>';
                $info .= '<book_title>' . $this->category . '<book_title>';
                $info = '<content>';
                break;
        }
        return $info;
    }
}

$book = new Book('PHP Language', 'Niton', 'Web Programming');
//echo "<pre>";
var_dump(json_decode($book->getInfo('JSON')));
