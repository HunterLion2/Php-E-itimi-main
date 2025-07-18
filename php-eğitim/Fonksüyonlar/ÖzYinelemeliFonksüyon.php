<?php

/* Fonksüyonun kendi içerisinde tekrar tekrar çağrılarak kullanılmasına denir. */
 
function faktoriyel($n) {
    if($n == 0) {
        return 1;
    } else {
        return $n * faktoriyel($n - 1);
    }
}

echo faktoriyel(3);

?>