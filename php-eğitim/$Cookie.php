<?php

/* Buradaki Cookie değeri tarayıcıda saklanan bilgilere erişim sağlar. */


/* Cookie fonksiyonu içerisine değer yazım sırası. */

/*

    setcookie(name, value, expire, path, domain, secure, httponly); 

    * name: Çerezin Adı (Anahtar)
    * value: Çerezin Değeri
    * expire: Çerezin geçerlilk süresi (Unix zaman dalgası olarak)
    * path: Çerezin geçerli olduğu dizin (genellikle)
    * domain: Çerezin geçerli olduğu alan adı
    * secure: Çerez, yalnızca HTTPS bağlantılarında gönderilir.
    * httponly: Çerez, yalnızca HTTP protokolü üzerinden erişilebilir.  (Javascript erişimini engeller.)

*/

/* Burada + 3600 ile cookie 1 saatlik izin verdik sonra kendini silicek */
setcookie("BeniHatirla", "Evet", time()+ 3600, "/", "php.test", true,true);

/* Eğer burada olduğu gibi (-) yaparsak o zaman süre sıfırlanacağı için cookie silinir. */
setcookie("BeniHatirla", "Evet", time()- 3600, "/", "php.test", true,true);

echo $_COOKIE['BeniHatirla'] /* Burada da COOKIE değeri ile cookie içerisindeki değerlere ulaşırız. */

?>