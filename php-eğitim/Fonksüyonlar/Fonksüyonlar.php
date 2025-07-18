<?php

// function merhaba($ad) {
//     echo "Benim adım: " . $ad;
// }

// merhaba("Emrah");


function SelamVer($isim = "Misafir") // Burada eğer fonksüyonumuz dışarıdan değer almazsa gösterilmesini istediğimiz değeri gireriz.
{
    echo "Merhaba, $isim!";
}

// Değişkenlerin Varlık Kontrolü

// Varlık kontrolü için (isset) adındaki fonksüyon kullanılır.

// isset değeri değerin içi dolu mu boş mu diye bakar sonucunda true değer döndürür bizde burada bu değer döndürmeyi kullanarak if else ilişkisi kurduk.


$isim = isset($_GET["isim"]) ? $_GET["isim"] : null;

SelamVer("Ahmet");

?>