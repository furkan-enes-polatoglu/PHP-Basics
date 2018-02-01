<?php

	$kacakadar = $_POST['fib'];
	
	$birincisayi=0;
	$ikincisayi=1;

	echo $birincisayi."<br/>";
	echo $ikincisayi."<br/>";

	for ($i=2; $i<=$kacakadar; $i++)  
	{
		$yenisayi = $birincisayi+$ikincisayi;
		echo $yenisayi."<br/>";
		$birincisayi = $ikincisayi;
		$ikincisayi = $yenisayi;

	}