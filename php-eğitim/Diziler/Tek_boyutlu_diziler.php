<?php

/* Tek Boyutlu Diziler */

// Tek boyutlu diziler, tek bir düzeyde veri içerir. Bu dizilerde veriler indeksler yardımıyla erişilebilir.


$meyveler = ["Elma","Armut","Muz"];

foreach($meyveler as $meyve) {
    echo $meyve . "<br>";
}


/* Anahtar Değer İlişkili Dizi */

$kisi = [
    "isim" => "Ahmet",
    "yas" => 25,
    "sehir" => "İstanbul"
];

echo $kisi['isim']; // Bu şekilde anahtarını yazarız değeri gelir.

?>