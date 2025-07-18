<?php

/* Tarih Zaman Fonksüyonları */

// strtotime, Bir tarih/saati Unix zaman damgasına çevirir. Yani aslında zaman bilgisini benzersiz bir sayıya atar

echo strtotime("2025-07-15");
// Çıktı: 1752525141 (Unix Zaman Dalgası)

echo time(); // Bu değerin strtotime'dan farkı şuanki zamanın unix değerini getirir.

echo mktime(0,0,0,12,25,2024); // Belirli bir tarihin zaman dalgasını döndürür.Sıfırlar ile yazdığım saat dakika saniyedir.

echo date("Y-m-d H:i:s"); // Bu metod belirli bir formatta tarih veya saat döndürür.

echo "<pre>";
print_r(getdate()); // getdate() değeri şuanki tarih saat bilgilerini bir dizi olarak döndürür.



?>