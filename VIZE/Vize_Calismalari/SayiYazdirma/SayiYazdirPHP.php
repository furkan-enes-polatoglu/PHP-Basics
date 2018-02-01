<?php

	$sayi = $_POST['sayi'];
	$x=1;

	while($x<=$sayi)
	{
		$y=$x*$x*$x;
		echo $x.". sayının küpü = ".$y."<br/>";
		$x++;
	}

?>