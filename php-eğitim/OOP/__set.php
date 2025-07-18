<?php
class Araba2 {
    public $marka;
    public $model;
    
    private $veriler = [];

    public function __construct($marka,$model)
    {
        $this->marka = $marka;
        $this->model = $model;
    }

    public function __set($name,$value) { // __set() değeri içerisine key ve value değerleri girilir ve bu sayede nesnede olmayan özellikler eklenebilir.
        $this->veriler[$name] = $value;

    }

    public function __toString() {
        return $this->bilgileriGoster();
    } 

    public function __get($name) { // __get() metodu bizim oluşturmuş olduğumuz nesnede , olmayan bir özelliğe atama yaparsak o zaman bu metot çalışır.
        return "Bu proporty mevcut değil" . $name;
    }

    public function bilgileriGoster() {
        return $this->marka . ' ' . $this->model;
    }
}

$bmw = new Araba2('BMW','X6');

echo $bmw->fiyat; // $bmw nesnesinde fiyat diye bir özellik olmadığı için __get() metodu çalışacak ve "Bu proporty mevcut değil" mesajını verecek.

?>