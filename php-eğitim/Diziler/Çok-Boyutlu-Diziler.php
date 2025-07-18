<?php

/* Çok Boyutlu Diziler */

// Çok boyutlu diziler, dizilerin içinde başka dizilerin bulunduğu yapılardır.
// Genellikle verileri daha organize bir şekilde saklamak için kullanılır.

$ogrenciler = [
    ["isim" => "Ali","yas" => 20,"bolum" => "Bilgisayar Mühendisliği"],
    ["isim" => "Ayşe","yas" => 22,"bolum" => "Yazılım Mühendisliği"],
    ["isim" => "Mehmet","yas" => 21,"bolum" => "Elektrik Mühendisliği"],
];

// echo $ogrenciler[0]["isim"]; bu şekilde tekilde çağrılabilir aşşağıda ki gibi genel de çağrılabilir.

foreach($ogrenciler as $ogrenci) {
    echo "İsim: " . $ogrenci["isim"] . "<br>";
    echo "Yaş: " . $ogrenci["yas"] . "<br>";
    echo "Bölüm: " . $ogrenci["bolum"] . "<br>";
    echo "-------------------------<br>";
}

?>