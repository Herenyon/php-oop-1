<?php
    class Movie {
        public $og_name;
        public $genre;

        function __construct($_og_name)
        {
            $this->og_name = $_og_name;

        }
    }

    $interstellar = new Movie ();
    $interstellar->og_name = "Interstellar";
    $interstellar->genre = "Sci-Fi";

    $dunkirk = new Movie ("Dunkirk");
    // echo $dunkirk->og_name;

    // $dunkirk->og_name = "Dunkirk";
    // $dunkirk->genre = "War";
    var_dump($interstellar);
    var_dump($dunkirk);
?>