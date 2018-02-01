<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table width="auto">
		<tr>
			<td>Adı Soyadı</td>
			<td>Vize</td>
			<td>Final</td>
			<td>Ort</td>
			<td>Durum</td>
		</tr>

		<tr>
			<?php
				$dosyaac = fopen("notlar.txt","r") or die("Açamadım");
				while(!feof($dosyaac))
				{
					$satir = fgets($dosyaac,1024);
					if($satir!="")
					{
						$satir = explode("-",$satir);
						echo "<tr>
						<td>$satir[0]</td>
						<td>$satir[1]</td>
						<td>$satir[2]</td>
						<td>$satir[3]</td>
						<td>$satir[4]</td>
						</tr>";
					}
				}
			?>
		</tr>


		
	</table>

</body>
</html>