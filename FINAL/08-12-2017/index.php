<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" width="800">
		<tr>
			<td height="150"> 

				<a href="index.php">Mesaj gir</a> 
				<br/>
				<a href="index.php?sayfaoku=mesajlar"> Mesaj göster </a>
			</td>
			
			<td>

				<?php
					switch (@$_GET["sayfaoku"]) 
					{
						case "mesajlar": 
							include "mesajoku.php"; 
							break;
						
						default: 
							include "mesajyaz.php";
							break;
					}
				?>

			</td>
		</tr>
	</table>
</body>
</html>