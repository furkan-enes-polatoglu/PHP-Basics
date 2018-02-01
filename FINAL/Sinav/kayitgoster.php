<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<td>Adı Soyadı</td>
			<td>E-Mail</td>
			<td>Cinsiyet</td>
			<td>Şife</td>
		</tr>

		<tr>
			<td>
				<?php

					$dosyaAc = fopen("furkan.txt","r") or die("Açamadım");
					while(!feof($dosyaAc))
					{
						$satir = fgets($dosyaAc,1024);
						if($satir!="")
						{
							$satir = explode("%",$satir);
							if($satir[2]=="e")
							{
								echo "<tr>
								<td>$satir[0]</td>
								<td>$satir[1]</td>
								<td>$satir[2]</td>
								<td>$satir[3]</td>";
							}
						}
					}

				?>

			</td>
		</tr>

	</table>

</body>
</html>