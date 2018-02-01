<?php

	$cinsiyet = $_POST['cin'];
	$yas = $_POST['yas'];
	$maas = $_POST['maas'];

	if($cinsiyet=="E" && $cinsiyet=="K")
	{
		$maas = $maas * 0.1;
		echo "Maaşınız = ".$maas;
	}
	else if($cinsiyet=="K")
	{
		$maas = $maas * 0.02;
		echo "Maaşınız = ".$maas;
	}
	else if($cinsiyet=="K" && $yas>45)
	{
		$maas = $maas * 0.01;
		echo "Maaşınız = ".$maas;
	}

?>