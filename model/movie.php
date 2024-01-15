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
}
