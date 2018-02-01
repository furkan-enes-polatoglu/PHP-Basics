<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="10">
		<form action="islem.php" method="POST">
			
			<tr>
				<td>Adı Soyadı : </td> <td><input type="text" name="adisoyadi"></td>
			</tr>

			<tr>
				<td>E-Posta : </td> <td><input type="text" name="eposta"></td>	
			</tr>

			<tr>
				<td>Kullanıcı Adı : </td> <td><input type="text" name="ka"></td>
			</tr>

			<tr>
				<td>Şifre : </td> <td><input type="password" name="sifre"></td>
			</tr>

			<tr>
				<td>Şifre Tekrar : </td> <td><input type="password" name="sifreTekrar">
			</tr>

			<tr>
				<td></td>

				<td>
					<input type="submit" name="kayitOl" value="KAYIT OL">					   
					<input type="reset" value="TEMİZLE">
				</td>
			</tr>

		</form>
	</table>
</body>
</html>