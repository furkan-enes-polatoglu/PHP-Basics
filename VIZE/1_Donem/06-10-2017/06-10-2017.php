<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
	<form action="06-10-2017.php" method="post">
		<table border="0">
			
			<tr>
				<td> Kullanıcı Adı : </td>  <td><input type="input" name="username" /> </td>
			</tr><br>
			
			<tr>
				<td> Şifre : </td>  <td><input type="password" name="password" /> </td> 
			</tr><br>

			<tr>
				<td> <input type="submit" /> </td>
			</tr>

		</table>
	
	</form> 

	
<?php 
		if(isset($_POST['username']) && isset($_POST['password'])) 
		{
			echo "Kullanıcı Adınız: ".$_POST['username']; 
			echo "<br> Şifreniz: ".$_POST['password'];
		}
?>

<br>

# isset bir değişkenin olup olmadığını kontrol etmek için kullanılan bir fonksiyondur. && ise and anlamına gelir. Yani burada ilk önce ara ve sirala sorgularının ikisininde aynı anda gelip gelmediğine bakılıyor, eğer geldiyse sorguların değerleri gösteriliyor. 

</html>