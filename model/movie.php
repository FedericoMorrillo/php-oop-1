<?php
//classe
class Movie
{
    public $title;
    public $original_language;
    public $vote;
    public $year;
    public $genre;

    // costruttore
    function __construct(
        $_title,
        $_vote,
        $_year,
        $_genre,
        $_original_language = 'English'
    ) {
        $this->title = $_title;
        $this->original_language = $_original_language;
        $this->vote = $_vote;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    //metodo
    public function showInfo()
    {
        //stampa a schermo le prorietà delle istanze
        echo "Title: {$this->title}" . " ";
        echo "Genre: {$this->genre}" . " ";
        echo "Lenguage: {$this->original_language}" . " ";
        echo "Vote: {$this->vote}" . " ";
        echo "Relese date: {$this->year}" . " ";
    }
}
