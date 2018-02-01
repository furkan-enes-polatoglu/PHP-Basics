<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<form action="index.php" method="POST">
		<tr>
			<td colspan="2" align="CENTER">Not Girişi</td>
		</tr>
	<tr>
		<td>Ad:</td>
		<td><input type="text" name="ad"></td>
	</tr>
	<tr>
		<td>Soyad:</td>
		<td><input type="text" name="soyad"></td>
	</tr>
	<tr>
		<td>Vize:</td>
		<td><input type="text" name="vize"></td>
	</tr>
	<tr>
		<td>Final:</td>
		<td><input type="text" name="final"></td>
	</tr>
	<tr>
		<td colspan="2" align="CENTER"><input type="submit" name="gir" value="Not Gir" width="100px"></td>
	</tr>
	<tr>
		<td colspan="2" align="CENTER">
			<?php 
				if(isset($_POST["gir"]))
				{
					$Ad = $_POST["ad"];
					$Soyad = $_POST["soyad"];
					$Vize = $_POST["vize"];
					$Final = $_POST["final"];
					$Ort = $Vize * 0.4 + $Final * 0.6;
					if($Ort < 50 || $Final <50) { $Durum = "Kaldı"; }
					else { $Durum = "Geçti"; }
					$dosyaAc = fopen("metin.txt", "a") or die("Açılamadı");
					$kaydet = $Ad." | ".$Soyad." | ".$Vize." | ".$Final." | ".$Ort." | ".$Durum.PHP_EOL;
					fwrite($dosyaAc, $kaydet) or die("Kaydedilemedi");
					echo "Notlar Kaydedildi";
					fclose($dosyaAc);
				}
			?>
		</td>
	</tr>
</form>
</table>
</body>
</html>