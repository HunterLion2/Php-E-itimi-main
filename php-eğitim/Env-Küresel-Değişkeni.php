<?php 

    /* -- PHP'deki $_ENV global değişkeni , çevresel değişkenlere erişim sağlar.
    -- Çevresel Değişkenler: Uygulama çalışırken sistem veya sunucu tarafından sağlanan bilgi parçacıklarıdır.
    -- Genellikle yapılandırma ayarları, API anahtarı, veritabanı bilgileri gibi hassas bilgiler için kullanılır. */

    echo $_ENV['APP_NEV']; // ENV ile bir env dosyası içerisindeki bilgilere erişebiliriz.
?>