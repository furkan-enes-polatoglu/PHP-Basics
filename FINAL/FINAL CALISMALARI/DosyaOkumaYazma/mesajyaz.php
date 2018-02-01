<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>

    <?php

        if(!isset($_POST["kaydet"]))
        {


    ?>

<table>

    <form action="index.php" method="post"> 
        <tr>
            <td> Ad Soyad : </td> <td><input type="text" name="adsoyad"></td>
        </tr>

        <tr>
            <td>E-mail : </td> <td><input type="text" name="email"></td>
        </tr>

        <tr>
            <td>Mesaj : </td><td><textarea name="mesaj" cols="25" rows="5"></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="kaydet" value="KAYDET"> <input type="reset" value="TEMİZLE"></td>
        </tr>
    
    </form>
</table>

<?php
}
else
{
    $adsoyad = $_POST["adsoyad"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];
    $kaydedilecekler = $adsoyad."-".$email."-".$mesaj.PHP_EOL;
    $dosyaAc = fopen("bilgiler.txt", "a") or die("Yazamadım!");
    fwrite($dosyaAc, $kaydedilecekler);
    echo "Bilgiler kaydedildi!";
    fclose($dosyaAc);

}

?>

</body>
</html>