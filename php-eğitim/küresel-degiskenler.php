<?php 
    /* GLOBAL Değişkeni */


    /* $GLOBALS, PHP'de tanımlanan tüm global değişkenlere erişim sağlar,Programın herhangi bir yerinden kullanılabilir. */

    $isim = "Ahmet";
    $yas = 25;

    /* Buradaki pre değeri ekranda yazan globals çıktısını düzenler. */

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";

    echo $GLOBALS['isim']; /* Burada ki değer ile yukarıda yazdığımız isim değerine ulaşırız. */
?>


<?php 

/* $_SERVER, PHP'de sunucu ve yürütmeye ortamı hakkında çeşitli bilgileri içeren bir süper global dizidir.
Bu dizi, sunucu başlıkları, yollar ve betik konumları gibi bilgileri sağlar. */

echo "<pre>";
print_r($_SERVER); /* Server ile ilgili bütün değerleri getirir eğer içerisinden bir değer almak istiyorsak o zaman aşşağıda ki gibi yapılır. */
echo "</pre>";

echo $_SERVER['REQUEST_METHOD']; /* Mesela bu değer gerçekleşen isteğin POST mu yoksa GET mi olup olmadığını söyler */

?>
<!-- Burada Gönder değerine bastığımız zaman echo $_SERVER['REQUEST_METHOD']; bu değer POST'a döner. -->
<form action="" method="post">
    <input type="text">
    <button type="submit">Gönder</button>
</form>












