<?php
class Movie
{
    public $og_name;
    public $genre;
    public $time_from = 0;
    function __construct($_og_name = null, $_genre = null)
    {
        $this->og_name = $_og_name;
        $this->genre = $_genre;
    }

    public function setTimeFrom($_time_from)
    {
        if ($_time_from < 2024) {
            $this->time_from = 2023 - $_time_from;
        }
    }
}

$interstellar = new Movie();
$interstellar->og_name = "Interstellar";
$interstellar->genre = "Sci-Fi";
$interstellar->setTimeFrom(2014);


$dunkirk = new Movie("Dunkirk", "War");
$dunkirk->setTimeFrom(2017);

var_dump($interstellar);
var_dump($dunkirk);
