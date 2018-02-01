<?php
                                    
                                     // ########## İNDEX ##########


if(isset($_POST["kayit"])) //Anasayfadaki Kayıt ol butonuna basıldığında
{
	include "kayitol.php";  //Kayıt olma formu açılsın
}

elseif (isset($_POST["giris"]))  // Anasayfadaki giriş butonuna basıldığında
{
	$dosyaAc = fopen("veriler.txt", "r") or die ("Dosya açılamadı!");  //veriler.txt dosyasını okuma modunda aç "r" read
	while (!feof($dosyaAc)) //Dosyadaki verilerin sonu olmadıkça
	{
		$satir = fgets($dosyaAc,1024);  //veriler.txt dosyasından fgets ile string al
		if($satir!="")  //Satır boş değilse
		{
			$satir = explode("|", $satir); //Her | sembolü gördüğünde explode ile satırı kelime kelime verilere böl

			if($satir[2]==$_POST["kullaniciadi"] && $satir[3]==$_POST["sifre"]) //Bölünen kelimelerin [2] index'i ka'dır. [3] ise şifredir. koşul sağlanıyorsa
			{
				die ("Giriş başarılı!");
			}
			else //Sağlanmıyorsa
			{
				die ("Kullanıcı adı veya şifre yanlış!");
			}
		}
	}

	fclose($dosyaAc); //Dosyayı kapat
}


									// ########## KAYIT OLMA FORMU ##########


elseif (isset($_POST["kayitOl"])) //Kayıt olma formundaki, KAYIT OL butonuna basıldığında
{
	$adisoyadi = $_POST["adisoyadi"]; //Adı soyadını değişkene al
	$eposta = $_POST["eposta"]; //E-postayı değişkene al
	$ka = $_POST["ka"];  //Kullanıcı adını değişkene al
	$sifre = $_POST["sifre"];  //Şifreyi değişkene al
	$sifreTekrar = $_POST["sifreTekrar"]; //Şifre tekrarı değişkene al

	if($sifre != $sifreTekrar) //Girilen şifre ve şifre tekrar birbiri ile aynı değilse
	{
		die("Şifreler aynı değil!");
	}
	else //Şifreler aynı ise 
	{
		$dosyaAc = fopen("veriler.txt", "a") or die("Dosya açılamadı!"); //"a" yani add (veri ekleme) modu ile dosyayı aç
		fwrite($dosyaAc, $adisoyadi."|".$eposta."|".$ka."|".$sifre."|".$sifreTekrar.PHP_EOL) or die("Dosyaya yazılamadı!"); 
		//Dosyaya yaz (hangi dosyaya? , veriler...)
		echo "Kayıt başarılı!"; //Kayıt dosyaya eklenince
		fclose($dosyaAc); //İşlem bitince dosyayı kapat

		include "index.php"; //Kayıt işleminden sonra tekrar anasayfatyı getir.
	}
}
