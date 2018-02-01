<?php 	
		include 'VizeFinalForm.php';
		
		$vize = $_POST['vize'];
		$final = $_POST['final'];
		$ort= $vize * 0.4 + $final * 0.6;
		echo "Ortalamanız = ".$ort."<br/>";

		if ($ort>=50 && $final>=50) 
		 	echo "Geçtiniz!<br/>";
		else
			echo "Kaldınız!<br/>";

		if($ort>90 && $ort<100)$harfnotu="AA";
		elseif ($ort>80 && $ort<89)$harfnotu="BA";
		elseif ($ort>70 && $ort<79)$harfnotu="BB";
		elseif ($ort>60 && $ort<69)$harfnotu="CB";
		elseif ($ort>50 && $ort<59)$harfnotu="CC";
		elseif ($ort>40 && $ort<49)$harfnotu="DC";
		elseif ($ort>30 && $ort<39)$harfnotu="DD";
		elseif ($ort<29)$harfnotu="FF";
		echo "Harf Notunuz = ".$harfnotu;

 ?>