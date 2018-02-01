<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="auto" border="1">
	<tr>

		<td width="100">
			<a href="index.php?oku=listele">Notları Listele</a>
		</br>
			<a href="index.php">Not Gir</a>
		</td>

		<td>
			<?php 

			if(@$_GET["oku"]=="listele")
			{
				include "listele.php";				
			}
			else
			{
				include "notgir.php";
			}

			 ?>
		</td>
	</tr>
</table>
</body>
</html>