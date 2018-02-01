<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<form action="kayitol.php" method="POST">
		<tr>
			<td>Adı Soyadi : </td><td><input type="text" name="ads"></td>
		</tr>
		<tr>
			<td>E-Posta : </td><td><input type="text" name="eps"></td>
		</tr>
		<tr>
			<td>Cinsiyet : </td> <td><input type="radio" name="cin" value="e">Erkek<input type="radio" name="cin" value="k">Kadın</td>
		</tr>
		<tr>
			<td>Şifre : </td><td><input type="password" name="sifre"></td>
		</tr>
		<tr>
			<td><input type="submit" name="kaydet" value="KAYDOL"></td>
		</tr>
	</form>
	</table>
<?php

if(isset($_POST['kaydet']))
{

	$adisoyadi = $_POST["ads"];
	$email = $_POST["eps"];
	$cinsiyet = $_POST["cin"];
	$sifre = $_POST["sifre"];

	$kaydedilecekler = $adisoyadi."%".$email."%".$cinsiyet."%".$sifre.PHP_EOL;

	$dosyaAc = fopen("furkan.txt","a") or die("Açamadım");
	fwrite($dosyaAc,$kaydedilecekler) or die("Yazamadım");
	echo "Kayıt başarılı";
	fclose($dosyaAc);
}


?>

</body>
</html>