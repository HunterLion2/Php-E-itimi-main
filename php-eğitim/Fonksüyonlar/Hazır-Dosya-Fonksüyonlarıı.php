<?php
/* Dosya Fonksüyonları */

// file_get_contents() içerisine girilen dosya içeriğini string olarak döndürür.

$context = file_get_contents("example.txt");
echo $context;

// fopen() , bir dosyayı açar.

$file = fopen("example.txt","r"); // ikinci girdiğimiz değer de açılacak olan dosyanın ne yapılacağını yani okuncak mı yazılıcak mı bunu belirtiriz.Burada "r" yani read ile okunucağı belirtilmiş.
if($file) {
    echo "Dosya başarıyla açıldı";
}

// fwrite(), bir dosyaya veri yazar.

$files = fopen("example.txt","w"); // Burada dosyayı "w" yani yazma modunda açarız.
fwrite($files, "Yeni içerik ekleniyor."); // 2.Girdiğimiz değer yazılacak değerdir bu değer dosyanın üstüne yazılmaz.Dosyanın içindekiler silinir bu değer eklenir.!Üstüne yazmak için fopen("example.txt","a") "a" kullanılır.
fclose($file);// Dosyayı kapatır

// file_exists(), bir dosyanın var olup olmadığını kontrol eder.

if(file_exists("example.txt")) {
    echo "Dosya Mevcut.";
} else {
    echo "Dosya Mevcut Değil.";
}
?>