<?php

class Book
{
    private $title;
    private $author;
    private $publicationYear;

    public function __construct($title, $author, $publicationYear)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPublicationYear()
    {
        return $this->publicationYear;
    }
}

?>
