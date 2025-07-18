<?php 

/* count() içine girilen dizi değerinin kaç eleman içerdiğini döndürür. */

$meyveler = ["Elma","Armut","Muz","Kiraz","Karpuz"];

echo $elemanSayisi = count($meyveler); 

/* sort() Dizi Elemanlarını Sıralama İçin Kullanılır.Alfabetik sıra ile sıralar ,tersine sıralamasını istiyorsan rsort() kullanılır.*/

$meyveler = ["Elma","Armut","Muz","Kiraz","Karpuz"];

sort($meyveler);
print_r($meyveler);

/* Dizileri Birleştirme */

// array_merge() birden fazla diziyi birleştirmek için kullanılır.

$dizi1 = ["Elma","Armut"];
$dizi2 = ["Muz","Kiraz"];

$birlesikDizi = array_merge($dizi1,$dizi2); // ["Elma","Armut","Muz","Kiraz"]

print_r($birlesikDizi);

/* Dizideki Bütün Anahtarları Listeler array_keys() */

$kisi = [
    "isim" => "Ahmet",
    "yas" => 25,
    "sehir" => "İstanbul",
    "meslek" => "Yazılım Geliştirici"
];

$anahtarlar = array_keys($kisi);
print_r($anahtarlar);

/* Dizi İçerisinde Eleman Kontrolü */

$kisi = [
    "isim" => "Ahmet",
    "yas" => 25,
    "sehir" => "İstanbul",
    "meslek" => "Yazılım Geliştirici"
];

if(in_array("Ahmet", $kisi)) {
    echo "Dizide Mevcut";
} else {
    echo "Dizide Mevcut Değil";
}

?>