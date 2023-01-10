<?php

class Movie {
    public $title;
    public $minutes;
    public $year;
    public $language;
    public $genres;
    private $price;

    public function __construct(string $_title, int $_minutes, int $_year, string $_language, Array $_genres) {
      $this->title = $_title;
      $this->minutes = $_minutes;
      $this->year = $_year;
      $this->language = $_language;
      $this->genres = $_genres;
    }

    public function setPrice() {
      if($this->year <= 2015) {
        $pricePerMin = 0.025;
      } else {
        $pricePerMin = 0.05;
      }
      $this->price = $pricePerMin * $this->minutes . " €";
    }
  };

?>