<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$vize=$_POST['viz'];
		$final=$_POST['fin'];
		$ort=$vize*0.4+$final*0.6;


		if ($vize>100 || $vize<0 || $final>100 || $final<0)
			echo "Notlar 0-100 arasında olmalıdır!";
		
		else
		{
			echo "Ortalamanız = ".$ort;

		if ($ort>=50 && $final>=50) 
			echo "<br/>GEÇTİNİZ!";
		else
			echo "<br/>KALDINIZ!";


		if ($ort>=90 && $ort<=100) 
			echo "<br/>Harf Notunuz = AA";
		elseif ($ort>=80 && $ort<=89)
			echo "<br/>Harf Notunuz = BA";
		elseif ($ort>=70 && $ort<=79) 
			echo "<br/>Harf Notunuz = BB";
		elseif ($ort>=60 && $ort<=69) 
			echo "<br/>Harf Notunuz = CB";
		elseif ($ort>=50 && $ort<=59) 
			echo "<br/>Harf Notunuz = CC";
		elseif ($ort>=40 && $ort<=49) 
			echo "<br/>Harf Notunuz = DC";
		elseif ($ort>=30 && $ort<=39) 
			echo "<br/>Harf Notunuz = DD";
		elseif ($ort>=0 && $ort<=29) 
			echo "<br/>Harf Notunuz = FF";
		else
			echo "<br/>HATALI İŞLEM";

		}

	 ?>

</body>
</html>