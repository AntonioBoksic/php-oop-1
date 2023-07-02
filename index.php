<?php

class Movie {

    public $name;
    public $releaseDate;
    public $originalLanguage;

    public function __construct($name, $releaseDate, $originalLanguage) {

        $this -> name = $name;
        $this -> releaseDate = $releaseDate;
        $this -> originalLanguage = $originalLanguage;
    }

    public function getName() {

        return $this -> name;
    }

}

$movie1 = new Movie("Pulp Fiction", "1994-10-28", "English");
$movie2 = new Movie("Titanic", "1998-01-16", "English");

var_dump($movie1);
echo "<br>";
var_dump($movie2);


?>