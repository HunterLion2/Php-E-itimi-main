<?php

// require 'post.php'; // Burada require ile post.php dosyasına erişmiş oluruz.
require 'kalıtım.php';

/* Kalıtım dosyasında post'u miras aldığımız için burada bu ikisini çağıramam yani miras alınan değer çağrılamaz.
O yüzden buradaki bu değeri silmem gerekir. */


$featuredPostManager = new FeaturedPost();

$featuredPostManager->create("Php nedir?", "PHP, web geliştirme için kullanılan bir dil.");
$featuredPostManager->create("OOP nedir?", "OOP, Sınıf ve Nesne tabanlı bir programlama dilidir.");

echo "<pre>";
print_r($featuredPostManager->readAll());

$featuredPostManager->markAsFeatured(2);

echo "<pre>";
print_r($featuredPostManager->getFeaturedPosts());











$postManager = new Post(); // Burada Post() sınıfı post.php içerisindeki class'dır ona yukarıda yazdığım "require" değeri ile ulaşmış oldum.

$postManager->create('PHP Nedir?', 'PHP, web geliştirme için kullanılan bir dil.');
// Yukarıda $postManager değerine new Post diyerek ulaşmıştık şimdi de burada içine girip, içindeki create() fonksüyonuna ulaşmış olduk.
$postManager->create('OOP Nedir?', 'OOP, Sınıf ve Nesne tabanlı bir programlama dilidir.');

echo "<pre>";
print_r($postManager->readAll()); // readAll() function değeri ile içerisine atılan değerleri dizi şeklinde görebiliriz.
// print_r($postManager->read(1));

$postManager->update(1, "PHP Nedir?", "PHP 1994 de çıkmışdır.");
print_r($postManager->read(1));

$postManager->delete(1);
print_r($postManager->readAll());
