<?php

/* En çok kullanılan hazır fonksüyonlar. */

$text = "Merhaba Dünya";
$length = strlen($text);

echo "String uzunluğu " . $length;

// strlen($text) değeri içeri girilen değerin string uzunluğunu bize verir. len() gibidir.

$text = "Merhaba Dünya";
$position = strpos($text,"Dünya");
echo "'Dünya' kelimesi şu konumda başlıyor." . $position;

// strpos($text,"Dünya") içerisine girilen ilk değer içinde arama yapılacak olan değerdir.Ne aranacak, ikinci girdiğimiz değer yani Dünya değeri aranıcak ve bize sonuç olarak bu değerin
// nerede başladığını getiricek.

// Çıktı: 'Dünya' kelimesi şu konumda başlıyor: 8


$text = "Merhaba Dünya";
$newText = str_replace("Dünya","Evren",$text);
echo $newText;

// str_replace("Dünya","Evren",$text) str_replace içine girdiğimiz 3.değer değiştirme yapılcak metin değeridir. 1.değer hangi kelimenin değiştilceği,2.değer de ne ile değiştirilceği yazar.


$text = "    Merhaba Dünya    ";
$trimmedText = trim($text);

// Buradaki trim() fonksüyonu içine girilen değerin etrafındaki boşlukları siler.(Genelde şifre girme işlemlerinde kullanılır.)

$text = "Merhaba Dünya";
$substring = substr($text, 8, 5); // 8.Konumdan itibaren 5 karakter alır.
echo "Parça: " . $substring;

// Bunu mesela benim blog projesinde ki açıklama çok uzun bunu kısaltmak ve daha küçük bir yeri almak için kullanabiliriz.

?>