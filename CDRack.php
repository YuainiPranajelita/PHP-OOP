<?php
require_once('Product.php');
class CDRack extends Product
{
    public $capacity = "kapasitas", $model = "model";

    public function __construct($name, $price, $discount) {
        parent::__construct($name, $price, $discount);
    }

    public function getCapacity () {
        return $this->capacity;
    }

    public function setCapacity ($kapasitas) {
        $this->capacity = $kapasitas;
        return $kapasitas;
    }

    public function getModel () {
        return $this->model;
    }

    public function setModel ($models) {
        $this->model = $models;
        return $models;
    }

    public function setPrice($price) {
        parent::setPrice($price * 1);
    }
}
?>