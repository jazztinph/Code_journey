<?php
class users
{
    // Properties 
    public $title;
    public $author;
    public $yearPublished;

    function __construct($title, $author, $yearPublished)
    {
        $this->title = $title;
        $this->author = $author;
        $this->yearPublished = $yearPublished;
    }

    // Method to display book details
    function getSummary()
    {
        return $this->title . $this->author . $this->yearPublished;
    }
}
