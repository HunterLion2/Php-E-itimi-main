<?php
session_start(); /* Session bilgilerine ulaşmak için ya da session ile ilgili birşey yapmak için bu satır en başa yazılır. . */

/* Oturumlar , çerezler , benzer şekilde kullanıcı bilgilerini saklamak için kullanılır ancak bilgiler sunucu tarafında saklanır. Bu da güvenlik
açısından çerezlere göre avantaj sağlar. */

$_SESSION['isim'] = "Ahmet";
$_SESSION['yas'] = 25;

unset($_SESSION['isim']); /* Buradaki değer sayesinde  sessıon değerini silmiş oluruz.*/

echo $_SESSION['isim'];
echo $_SESSION['yas'];

?>