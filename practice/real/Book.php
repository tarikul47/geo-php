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

    public function getInfo(DataFormaterInterface $formater)
    {
        return $formater->getContent($this);
    }
}
