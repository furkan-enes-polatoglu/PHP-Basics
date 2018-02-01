<?php


	include 'vkiFORM.php';

	// VKİ >>> KİLO / (BOY * BOY)
	// 0-18 ise Zayıf  /  18-25 ise Normal  /  25-30 ise Kilolu

	$kilo = $_POST['kilo'];
	$boy = $_POST['boy'];
	$vki = $kilo / ($boy*$boy);
	if($vki<18)
		echo "Zayıfsınız";
	if($vki>=18 && $vki<=25)
		echo "Normalsiniz";
	if($vki>=25 && $vki<=30)
		echo "Kilolusunuz";

?>