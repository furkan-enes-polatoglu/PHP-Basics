<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="5" align="center">
		<form action="giris.php" method="POST">
			<tr>
				<td>Kullanıcı Adı : </td><td><input type="text" name="ka"></td>
			</tr>
			<tr>
				<td>Şifre : </td><td><input type="password" name="psw"></td>
			</tr>
			<tr>
				<td>Giriş Türü : </td><td><input type="radio" name="secim" value="ogr">Öğrenci <input type="radio" name="secim" value="ogrt">Öğretmen
			</tr>
			<tr>
				<td></td><td><input type="submit" name="girisyap" value="GİRİŞ YAP"></td>
			</tr>
		</form>
	</table>

</body>
</html>