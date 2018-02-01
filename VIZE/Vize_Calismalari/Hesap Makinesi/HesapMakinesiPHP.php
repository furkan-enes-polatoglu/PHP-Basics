<?php 

include 'HesapMakinesiFORM.php';

$sayi1 = $_POST['say1'];
$sayi2 = $_POST['say2'];

if (isset($_POST['topla']))
	$sonuc = $sayi1+$sayi2;

if (isset($_POST['cikar']))
	$sonuc = $sayi1-$sayi2;

echo "Sonuç = ".$sonuc;


 ?>