<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		if(!isset($_POST["gonder"])) //KAYDET BUTONUNA BASILMADIYSA
		{

		 
	?>

<table>
<form action="index.php" method="POST">


	<tr>
		<td colspan="2"> MESAJ GİRİŞİ </td>
	</tr>

<tr>
	<td>Ad Soyad :</td>
	<td> <input type="text" name="ads"></td>
</tr>

<tr>
	<td>E-Mail :</td>
	<td><input type="text" name="epst"></td>
</tr>

<tr>
	<td>Mesaj :</td>
	<td> <textarea name="msj" cols="25" rows="5" ></textarea></td>
</tr>

<tr>
	<td><input type="submit" name="gonder" value="GÖNDER">  <input type="reset" name="" value="TEMİZLE"></td>
</tr>
</form>
</table>

<?php
}
else //KAYDETE BASILDIYSA
{
	$ad = $_POST['ads'];
	$mail = $_POST['epst'];
	$mesaj = $_POST['msj'];
	$dosyaadi = "furkan.txt";
	$kaydedilecekbilgiler =  $ad."||".$mail."||".$mesaj.PHP_EOL;  //PHP_EOL alt satııra geçirir.
	$dosyaaac = fopen($dosyaadi, "a") or die ("Dosya açılmadı!");
	fwrite($dosyaaac, $kaydedilecekbilgiler) or die("Bilgileri yazamadım!");
	echo "Mesaj başırıyla kaydedildi";
	fclose($dosyaaac);

}
?>
</body>
</html>