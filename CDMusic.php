<?php
require_once('Product.php');
class CDMusic extends Product
{
    public $artist = "artis", $genre = "genre";

    public function __construct($name, $price, $discount) {
        parent::__construct($name, $price, $discount);
    }

    public function getArtist () {
        return $this->artist;
    }
    
    public function setArtist ($artis) {
        $this->artist = $artis;
        return $artis;
    }

    public function getGenre () {
        return $this->genre;
    }

    public function setGenre ($Genre) {
        $this->genre = $Genre;
        return $Genre;
    }

    public function setPrice ($price) {
        parent::setPrice($price * 1);
    }

    public function setDiscount ($discount) {
        parent::setDiscount($discount + 5);
    }
}
?>