<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
<tr>
	<td>
	<?php
	
	$KulAdi=$_POST["kAdi"];
	$Sifre=$_POST["sfr"];
	if($_POST["secim"]=="Öğr")
	{
		$dosyaac = fopen("ogrenci.txt","r") or die ("Hata1");
	}
	else if($_POST["secim"]=="Öğrt")
	{
		$dosyaac= fopen("ogretmen.txt","r") or die ("hata1");
	}


		while(!feof($dosyaac))
		{		
			$satir = fgets($dosyaac, 1024) or die ("hata2");
			$satir = explode(" | ", $satir);
			
			if($satir!="")
			{
				if($satir[0]==$KulAdi && $satir[1]==$Sifre)
				{
					echo "Hoşgeldin ".$satir[2];
				}
				else
				{
					echo "hatalı giriş";
				}
			}
		}
		fclose($dosyaac);
	?>
</td>
</tr>
</table>

</body>
</html>