<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="5" width="800">
		
		<tr>
			<td height="150"> 
				<a href="index.php">Mesaj Yaz</a> 
				<br>
				<a href="index.php?sayfa=mesajlar">Mesaj Oku</a>
			</td>

			<td>

				<?php

					switch (@$_GET["sayfa"]) 
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