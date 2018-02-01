<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
		<tr>
			<td colspan="6" align="CENTER">Not Listesi</td>
		</tr>
	<tr>
		<td>Adı</td>
		<td>Soyad</td>
		<td>Vize</td>
		<td>Final:</td>
		<td>Ort</td>
		<td>Durum</td>
	</tr>
	<tr>
		<?php 

		$dosyaAc = fopen("metin.txt","r") or die ("Açılamadı");
		while (!feof($dosyaAc)) 
		{
			$satir = fgets($dosyaAc, 1024);
			if($satir!="")
			{
				$satir = explode("|", $satir);
				echo "<tr>
				<td>$satir[0]</td>
				<td>$satir[1]</td>
				<td>$satir[2]</td>	
				<td>$satir[3]</td>	
				<td>$satir[4]</td>	
				<td>$satir[5]</td>	
				</tr>";
			}
		}
		fclose($dosyaAc);

		 ?>
	</tr>
</table>
</body>
</html>