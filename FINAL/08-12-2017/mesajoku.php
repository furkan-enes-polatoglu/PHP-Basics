<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table width="650">	
		<tr>
			<td><u><b>ADI SOYAD</b></u></td>
			<td><u><b>E-POSTA</b></u></td>
			<td><u><b>MESAJ</b></td>
		</tr>


		<?php

			$dosyaac = fopen("furkan.txt", "r") or die ("Açamadım!");
			while(!feof($dosyaac)) // açtığın dosyanın sonu olmadığı sürece FEOF - dosya sonu demektir
			{
				$satir = fgets($dosyaac, 1024); // açmış olduğun dosyadan string al
				if($satir != "")
				{
					$satir = explode("||", $satir); //satırı || gördüğünde parçala
					echo "<tr>
					<td>$satir[0]</td>
					<td>$satir[1]</td>	
					<td>$satir[2]</td>
					</tr>";
				}
			}
			fclose($dosyaac);
		?>

		
	</table>
</body>
</html>