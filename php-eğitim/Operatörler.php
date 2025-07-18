<?php

/* OPERATÖRLER */

/* Operatörler php de birden fazla işlem yapmamıza olanak sağlar. */

/* =,+=,-= ... gibi gibi bunlar operatörler. */


/* KARŞILAŞTIRMA OPERATÖRLERİ */

/* ==,===,!=,!==,<,>,<=,>=,<=> */

var_dump(5 == "5"); // True , çünkü değerler eşit (tip dikkate alınmaz.) o zaman bu fonksiyon çalışır.
/* Bu fonksüyon değişkenin tipini bize gösteriyor hem de sonucunu gösteriyor.*/

/* (<=>) Spaceship Operatörü Bi Tek Bunu Bilmiyorum.

-- Bu değerin kullanımı şu şekildedir.*/

var_dump(5 <=> 3); // Sonuç 1 gelir çünkü (5, 3'ten büyük)
var_dump(5 <=> 5); // Sonuç 0 gelir çünkü (5, 5'e eşit)
var_dump(3 <=> 5); // Sonuç -1 gelir çünkü (3, 5'ten küçük)

// Yani soldaki sağdan büyükse 1 , sağdaki soldan büyükse -1 , ikiside birbirine eşitse 0 olur.

/* MANTIKSAL OPERATÖRLER */

// &&,||,!

/* Arttırma Ve Eksiltme Operatörleri */

$stok = 10;
echo ++$stok; // Çıktı: 11 (Önce arttırır, sonra gösterir.)

$stok = 10;
echo $stok++; // Çıktı: 10 (Önce mevcut değeri gösterir, sonra artırır)
echo $stok;

// ++ 'nın önce olması sayıyı direkt artırır sonra gösterir.Artı sonraysa ilk önce sayı gözükür sonra artar 

?>


<?php

/* Null Koalesan Operatörü (??) */

// Null Kontrolü

$isim = $_GET['kullaniciadi'] ?? 'Misafir'; // Burada ?? değeri eğer bir kullanıcı adı yoksa , yani bir null değer dönme varsa ?? den sonra gelen değeri getirir yani (Misafir) , ?? bu işe yarar.
echo "Merhaba: " . $isim; // Php de nokta birleştirme operatörüdür.

/* Ternary (Üçlü) Operatör */

// if else yazmadan if else yazmak için kullanılır bunlar (?,:) ikilisidir.

$a = 10;
echo $a > 5 ? "Büyük" : "Küçük";

/* Nullsafe Operatörü (?->) (PHP 8.0+) */

// Null değerler üzerinde güvenli bir şekilde metot veya özelliğe erişmek için kullanılır.

$kullaniciadi = null;
echo $kullaniciadi ?-> getAdi();


?>