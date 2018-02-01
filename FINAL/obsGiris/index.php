<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="giris.php" method="POST">

<table>

<tr>
	<td>Kullanıcı Adı:</td>
	<td><input type="text" name="kAdi"></td>
</tr>
<tr>
	<td>Şifre:</td>
	<td><input type="text" name="sfr"></td>
</tr>
<tr>
	<td>Giriş Türü:</td>
	<td><input type="radio" name="secim" value="Öğr">Öğrenci<input type="radio" name="secim" value="Öğrt">Öğretmen</td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="gir" value="Giriş"></td>
</tr>

</table>

</form>
</body>
</html>