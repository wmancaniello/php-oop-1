<?php

class Movie
{
    private $title;
    private $genre;
    private $year;

    public function __construct($title, Genre $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    // Titolo
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    // Genere
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    // Anno
    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }

    // Stampa
    public function __toString()
    {
        return "Titolo: {$this->title} - Genere: {$this->genre->getName()} - Anno: {$this->year}";
    }
}
