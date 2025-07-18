<?php 

/* $_REQUEST değeri ile Get,Post ve Cookıe bilgisine erişiriz. */

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_REQUEST['ad']; /* Burada ki değer sayesinde input içine girdiğimiz değer , gönder butonuna basılınca burada gözükür.*/

?>

<form action="" method="post">
    <input name="ad" type="text">
    <button type="submit">Gönder</button>
</form>


<!-- -------------------------------------------------------------------- -->


<?php 

// $_FILES Değeri , dosya yükleme işlemi sırasında kullılan bir süper global dizidir. Bir form aracılığıyla sunucuya yüklenen dosyaların bigilerini içerir.
// Bu, dizi,dosya adı,geçici konumu, boyutu gibi bilgileri tutar ve bir dosya hakkında detaylı bilgi sağlar.

echo "<pre>";
print_r($_FILES['dosya']);
echo "</pre>";

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="dosya">
    <button type="submit">Gönder</button>
</form>
















