<?php

	$aDegeri = $_POST['a'];
	$bDegeri = $_POST['b'];
	$cDegeri = $_POST['c'];
	$delta = $b*$b-4*$a*$c;
	if($delta<0)
		echo "Kök yoktur!";
	else
		$x1 = (-$b+sqrt($delta)) / (2*$a);
		$x2 = (-$b-sqrt($delta)) / (2*$a);

		echo "x1 = ".$x1."<br/> x2 = ".$x2;

?>