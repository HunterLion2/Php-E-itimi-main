<?php
class Araba2 {
    public $marka;
    public $model;

    public function __construct($marka,$model)
    {
        $this->marka = $marka;
        $this->model = $model;
    }

    public function __toString() {
        return $this->bilgileriGoster();
    } // __toString() değeri ürettiğimiz nesneyi string değere çevirmek için kullanılır.

    public function bilgileriGoster() {
        return $this->marka . ' ' . $this->model;
    }
}

$bmw = new Araba2('BMW','X6');

echo $bmw->bilgileriGoster();

?>