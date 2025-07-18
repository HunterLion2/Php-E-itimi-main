<?php

/* Try,Catch,Finally Blokları */

// Try: Hata oluşturabilicek kodlar buraya yazılır.
// Chatch: Hata meydana geldiğinde çalışır.
// Finally: Hata meydana gelsede gelmese de çalışır.

try {
    $file = fopen("examples.txt","r");
    if(!$file) {
        throw new Exception('Dosya Açılmadı.');
    }
} catch (Exception $e) {// Exception bir hata yönetim sınıfıdır bir değer üretir biz o değeri burda $e değeri aldık. Yani hatanın kendisini bu değer ile yakalarız.
    echo "Hata: " . $e ->getMessage();
} finally {
    echo "Bu kod her zaman çalışır.";
}

// Biz eğer yerleşik php'nin kendi hata bildirimlerinin çıkmasını istemiyorsak o zaman "error_reporting(0)" değerini kullanırız.

error_reporting(0); // Bunu kullandığımız zaman eğer kendimiz de bir hata mesajı fırlatmazsak sayfa boş kalır.

?>