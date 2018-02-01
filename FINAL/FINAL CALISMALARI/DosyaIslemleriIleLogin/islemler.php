<?php
	
	if(isset($_POST['kayitsayfasi']))
	{
		include "kayitol.php";
	}
	else if(isset($_POST['girisyap']))
	{
		$dosyaac = fopen("uyeler.txt","r") or die("Açamadım!");
		while(!feof($dosyaac))
		{
			$satir = fgets($dosyaac,1024);
			if($satir!="")
			{
				$satir = explode("-", $satir);
				if($satir[2]==$_POST['ka'] && $satir[3]==$_POST['psw'])
				{
					die ("Hoşgeldin ".$satir[0]);
				}
				else
				{
					die ("Şifre yanlış!");
				}
			}
		}
		fclose($dosyaac);
	}


	else if(isset($_POST['kayitol']))
	{
		$adisoyadi = $_POST['adisoyadi'];
		$email = $_POST['email'];
		$ka = $_POST['ka'];
		$psw = $_POST['sifre'];
		$pswT = $_POST['sifreTekrar'];
		if($psw!=$pswT)
		{
			echo "Şifreler aynı değil!";
		}
		else
		{
			$dosyaac = fopen("uyeler.txt", "a") or die("Açamadım");
			$kaydedilecekler = $adisoyadi."-".$email."-".$ka."-".$psw."-".$pswT.PHP_EOL;
			fwrite($dosyaac,$kaydedilecekler) or die("Yazılamadı!");
			echo "Kayıt başarılı!";
			fclose($dosyaac);
		}


	}

?>