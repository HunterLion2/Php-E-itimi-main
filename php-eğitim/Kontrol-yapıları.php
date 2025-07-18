<?php 

/* Switch case modeli (if else'i bildiğim için atladım) */

// Switch case özellikle sabit değer karşılaştırmalarında kullanılır.(if else yerine).

/* switch(ifade) {
    case deger1:
        // deger1 ile eşleşirse çalışıcak kod budur.
        break; // Bu değer de çalıştıktan sonra çıkış yapılmasını sağlar.
    case deger2:
        // deger2 ile eşleşirse çalıştırılacal kod
        break
    default: 
        // Hiçbir koşuş sağlanmazsa çalıştırılacak kod bloğudur.
} 
*/

$gun = "Perşembe";

switch ($gun) {
    case "Cumartesi":
        echo "Bugün Cumartesi";
        break;
    case "Pazartesi":
        echo "Bugün Pazartesi";
    default:
        echo "Günler eşleşmedi";
}

?>

<?php 

/* Döngüler */


// Sadece PHP de foreach içerisine girilen değerin adı farklı yani as değeri

$dizi = ["PHP","Javascript","Python"];

foreach($dizi as $deger) { // Burada girdiğimiz (as) değeri PHP ye özeldir.
    echo $deger . " ";
}

// Foreach dizisinde anahtar değer ilişkisi.

$kategoriler = [
    1 => "Elektronik",
    2 => "Ev",
    3 => "Yaşam",
    4 => "Kitap",
    5 => "Moda",
];

echo "<h3>Kategoriler</h3>";
echo "<ul>";

foreach($kategoriler as $id => $kategori) { // Burada kategoriler içerisinde bir eşleşme yani bir ID ,değer ilişkisi olduğu için böyle yaparız.
    // Burada $id değeri sayılara , karşısındaki değerler de $kategori değerine eşit olur böylelikle iki değeri de aynı foreach içerisinde döndürebiliriz.
    echo "<li>Kategori ID: {$id} , Adı: {$kategori}</li>";
}

echo "</ul>";

?>