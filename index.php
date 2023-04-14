<?php
    class Movie {
        public $og_name;
        public $genre;

        function __construct($_og_name = null, $_genre= null)
        {
            $this->og_name = $_og_name;
            $this->genre = $_genre;
        }
    }

    $interstellar = new Movie ();
    $interstellar->og_name = "Interstellar";
    $interstellar->genre = "Sci-Fi";

    $dunkirk = new Movie ("Dunkirk", "War");
    // echo $dunkirk->og_name;
    // echo $dunkirk->genre;

    // $dunkirk->og_name = "Dunkirk";
    // $dunkirk->genre = "War";
    var_dump($interstellar);
    var_dump($dunkirk);
?>