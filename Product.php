<?php
class Product 
{
    public $name;
    public $price;
    public $discount;

    public function __construct($name, $price, $discount){
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }
    public function getPrice() {
        return $this->price;
    }

    public function setPrice ($price) {
        $this->price = $price;
        return $price;
    }

    public function getName () {
        return $this->name;
    }

    public function setName ($name) {
        $this->name = $name;
        return $name;
    }

    public function getDiscount () {
        return $this->discount;
    }

    public function setDiscount ($diskon) {
        $this->discount = $diskon;
        return $diskon;
    }
}
?>