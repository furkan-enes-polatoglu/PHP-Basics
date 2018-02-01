<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>
<body>

<table border="0" width="600">
	<tr>
		<td><b>AD SOYAD</b></td>
		<td><b>E-MAİL</b></td>
		<td><b>MESAJ</b></td>
	</tr>

		<?php

			$dosyaAc = fopen("bilgiler.txt", "r") or die("Okuyamadım!");
			while(!feof($dosyaAc))
			{
				$satir = fgets($dosyaAc, 1024);
				if($satir!="")
				{
					$satir = explode("-", $satir);
					echo "<tr>
					<td>$satir[0]</td>
					<td>$satir[1]</td>
					<td>$satir[2]</td>
					</tr>";
				}
			}
			fclose($dosyaAc);

		?>


	

</table>

</body>
</html>