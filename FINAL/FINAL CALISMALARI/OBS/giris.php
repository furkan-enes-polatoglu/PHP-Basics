<?php
	{
		$ka = $_POST['ka'];
		$psw = $_POST['psw'];

		if($_POST['secim']=="ogr")
		{
			$dosyaac = fopen("ogrenciler.txt","r") or die("Açamadım!");
		}
		else if($_POST['secim']=="ogrt")
		{
			$dosyaac = fopen("ogretmenler.txt","r") or die("Açamadım!");
		}

		while(!feof($dosyaac))
		{
			$satir = fgets($dosyaac,1024);
			if($satir!="")
			{
				$satir = explode("-",$satir);
				if($satir[0]==$ka && $satir[1]==$psw)
				{
					echo "Hoşgeldin ".$satir[2];
				}
				else
				{
					echo "Hatalı";
				}
			}
		}

	}
?>