<?php

/* Sınıflar (class) 'lar bir plan gibidir , nesneler ise bu planın gerçek dünyada ki temsilidir. */


class Araba1 {
    // Sınıf Özellikleri

    public $marka;
    public $model;
    public $renk;
    public $hiz = 0;

    public function hizlan($artis) { // Yukarıda ki değerlere erişebilmek için ("$this") kullanılır.
        $this->hiz += $artis;
    }

    public function yavasla($artis) {
        $this->hiz -= $artis;
    }

    public function dur() {
        $this->hiz = 0;
    }
}


class Araba3 {
    public $marka;
    public $model;

    public function bilgileriGoster() {
        return $this->marka . ' ' . $this->model;
    }
}

$bmw = new Araba3();
$bmw->marka = 'BMW';
$bmw->model = 'X6';

echo $bmw->bilgileriGoster();
echo "<br>";
echo $bmw->marka;


?>