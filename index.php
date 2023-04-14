<?php
    class Movie {
        public $og_name;
        public $genre;
    }

    $interstellar = new Movie ();
    $interstellar->og_name = "Interstellar";
    $interstellar->genre = "Sci-Fi";

    $dunkirk = new Movie ();
    $dunkirk->og_name = "Dunkirk";
    $dunkirk->genre = "War";
    var_dump($interstellar);
    var_dump($dunkirk);
?>