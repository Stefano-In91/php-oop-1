<?php

require_once __DIR__ . "/classes/Movie.php";

$movies = 
[
  new Movie("Avatar", 162, 2009, "En", ["Action", "Science Fiction", "Adventure"]),
  new Movie("Black Adam", 124, 2022, "En", ["Action", "Science Fiction", "Adventure", "Fantasy"]),
];

$movies[0]->setPrice();
$movies[1]->setPrice();
var_dump($movies);
?>
