<?php

class Movie {
  public $name;
  public $minutes;
  public $year;
  public $language;
  public $genres;
  private $price;

  public function __construct(string $name, int $minutes, int $year, string $language, Array $genres) {
    $this->name = $name;
    $this->minutes = $minutes;
    $this->year = $year;
    $this->language = $language;
    $this->genres = $genres;
  }

  public function setPrice() {
    if($this->year <= 2015) {
      $pricePerMin = 0.025;
    } else {
      $pricePerMin = 0.05;
    }
    $this->price = $pricePerMin * $this->minutes . " €";
  }
  public function getPrice() {
    return $this->price;
  }
};

$movie = new Movie("Avatar", 162, 2009, "En", ["Action", "Science Fiction", "Adventure"]);
$movie->setPrice();
var_dump($movie);

$movie = new Movie("Black Adam", 124, 2022, "En", ["Action", "Science Fiction", "Adventure", "Fantasy"]);
$movie->setPrice();
var_dump($movie);
?>
