<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table width="auto" border="1">
		<tr>
			<td width="100">
				<a href="index.php?oku=listele">NOT LİSTESİ<br/>
				<a href="index.php">NOT GİRİŞ</a></td>
			</td>

			<td>
				<?php

					if(@$_GET['oku']=="listele")
					{
						include "notlistesi.php";
					}
					else
					{
						include "notgiris.php";
					}
				?>
			</td>
		</tr>
	</table>
</body>
</html>