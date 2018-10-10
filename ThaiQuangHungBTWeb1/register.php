<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dang ky</title>
</head>
<body>
	<form method="get">
		<p>User</p>
		<input type="text" name="user" placeholder="Nhap user...">
		<br>
		<p>Password</p> 
		<input type="password" name="password" placeholder="Nhap password...">
		<br>
		<p>FirstName</p>
		<input type="text" name="firstname" placeholder="Nhap firstname...">
		<br>
		<p>LastName</p>
		<input type="text" name="lastname" placeholder="Nhap lastname...">
		<br>
		<br>
		<input type="submit" value="Dang Ky">
	</form>
	<table border="1">
		<tr>
			<th>Username</th>
			<th>Full Name</th>
		</tr>
		<tr>
		<?php if (empty($_GET) == true): ?>
        	<?php echo " "; ?>
        <?php endif;?>
	    <?php if(empty($_GET) == false): ?>
			<td>
				<?php echo $_GET["user"]; ?>
			</td>
			<td>
				<?php 
					echo $First = ($_GET['lastname']);
					echo $Last = ($_GET['firstname'])
				?>	
			</td>
		<?php endif; ?>
		</tr>
	</table>
</body>
</html>