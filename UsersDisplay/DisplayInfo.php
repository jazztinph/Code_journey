<?php
// class users
// {
//     // Properties 
//     private $title, $author, $yearPublished;

//     function __construct($title, $author, $yearPublished)
//     {
//         $this->title = $title;
//         $this->author = $author;
//         $this->yearPublished = $yearPublished;
//     }

//     public function getInfo()
//     {
//         return $this->title . " by " . $this->author . ", published in " . $this->yearPublished;
//     }
// }

/*
Bottle Collector Reward System
Jazztin deposited 3 bottles and earned 30 points.
Admin checking: Jazztin has 30 points.*/


class Users
{
    private $name;
    protected $points = 0;
    private $bottles = 0;
    private $pointsPerBottle = 10;

    public function __construct($name, $bottlesDeposited)
    {
        $this->name = $name;
        $this->bottles = $bottlesDeposited;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function getBottlesDeposited()
    {
        return $this->bottles;
    }

    public function getPointsPerBottle()
    {
        return $this->pointsPerBottle;
    }

    public function calculatePoints()
    {
        $this->points = $this->bottles * $this->pointsPerBottle;
        return $this->points;
    }
}

class Deposit extends Users
{
    public function getDepositMessage()
    {
        $points = $this->calculatePoints();

        return "<b>{$this->getName()}</b> deposited {$this->getBottlesDeposited()} bottles and earned {$points} points.";
    }
}
