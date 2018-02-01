<?php

	include 'AdinizYasinizFORM.php';

	$ad = $_POST['ad'];
	$dyili = $_POST['yil'];
	$suankiyil = 2017;
	$yas = $suankiyil - $dyili;
	echo "Adınız = ".$ad."<br/> Yaşınız = ".$yas; 					

?>