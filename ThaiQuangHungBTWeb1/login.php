<?php 
	include 'models/User.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form method="post">
		<p>Username</p>
		<input type="text" name="user"><br>
		<p>Password</p>
		<input type="password" name="pass"><br>
		<input type="submit" name="dangnhap" value="Dang nhap">
	</form>
	<?php 
	if (isset($_POST['user'])&& isset($_POST['pass']))
	{
		if(User::login($_POST['user'], password_verify($_POST['pass'],PASSWORD_DEFAULT)) == true)
		{
			echo "Logged in successfully";
		}
	}
	?>	
</body>
</html>