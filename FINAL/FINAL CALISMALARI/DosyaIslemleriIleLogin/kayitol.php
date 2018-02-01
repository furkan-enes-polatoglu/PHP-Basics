<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="2">
		<form action="islemler.php" method="POST">
			<tr>
				<td>Adı Soyadı : </td><td><input type="text" name="adisoyadi"></td>
			</tr>
			<tr>
				<td>E-Mail : </td><td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Kullanıcı Adı : </td><td><input type="text" name="ka"></td>
			</tr>
			<tr>
				<td>Şifre : </td><td><input type="password" name="sifre"></td>
			</tr>
			<tr>
				<td>Şifre Tekrar : </td><td><input type="password" name="sifreTekrar"></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="kayitol" value="KAYIT OL"></td>
			</tr>
			
		</form>
	</table>

</body>
</html>