<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<form action="index.php" method="POST">
			<tr>
				<td>Adı Soyadı : </td><td><input type="text" name="adisoyadi"></td>
			</tr>
			<tr>
				<td>Vize : </td> <td><input type="text" name="vize"></td>
			</tr>
			<tr>
				<td>Final : </td><td><input type="txet" name="final"></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="notugir" value="NOT GİR"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<?php

						if(isset($_POST['notugir']))
						{
							$adisoyadi = $_POST['adisoyadi'];
							$vize = $_POST['vize'];
							$final = $_POST['final'];
							$ort = $vize*0.4+$final*0.6;
							if($ort<50 && $final<50)
								$durum = "KALDI";
							else
								$durum = "GEÇTİ";
							$dosyaAc = fopen("notlar.txt","a") or die("Ekleyemedim!");
							$kaydedilecekler = $adisoyadi."-".$vize."-".$final."-".$ort."-".$durum.PHP_EOL;
							fwrite($dosyaAc,$kaydedilecekler);
							echo "Kaydedildi";
							fclose($dosyaAc);
						}
						
					?>
				</td>
			</tr>
		</form>
	</table>

</body>
</html>