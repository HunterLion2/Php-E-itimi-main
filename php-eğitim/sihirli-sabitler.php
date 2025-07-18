<?php 


/* __LINE__ Kodun bulunduğu satır numarasını döndürür. */

echo "Bu kodun bulunduğu satır numarası: ". __LINE__; // Ekranda Bu kodun bulunduğu satır numarası: 6 'der.


/* __FILE__ çalışan dosyanın tam dosya yolunu döndürür. */

echo "Bu dosyanın yolu".__FILE__;

/* __DIR__ çalışan dosyanın tam dosya yolunu döndürür. */

echo "Bu dosyanın bulunduğu dizin".__DIR__;

/* __FUNCTION__ Bulunduğu fonskiyonun adını döndürür. */

function selamver() {
    echo "Bu fonksiyonun adı:".__FUNCTION__;
}

selamver();

/* __CLASS__ Bulunduğu sınıfın Adını Döndürür. */

class Araba {
    public function model() {
        echo "Bu sınıfın adı: ".__CLASS__;
    }
}

$arabam = new Araba();
$arabam->model();


/* __TRAİT__ Bulunduğu sınıfın Adını Döndürür. */


trait Kullanılabilir {
    public function bilgi() {
        echo "Bu trait'in adı: ".__TRAIT__;
    }
}

class Test {
    use Kullanılabilir;
}

$nesne = new Test();
$nesne->bilgi();

// Çıktı: Bu traitin adı: Kullanılabilir.

/* __METHOD__ Bulunduğu sınıfın Adını Döndürür. */


class Ornek {
    public function test() {
        echo "Bu methodun tam adı".__METHOD__;
    }
}

$nesne = new Ornek();
$nesne->test();

// Çıktı: Bu methodun tam adı: Ornek::test

/* __NAMESPACE__ Bulunduğu namespace'in Adını Döndürür. */

// namespace OrnekNamespace;

// echo "Bu namespace'in adı: ".__NAMESPACE__;


?>