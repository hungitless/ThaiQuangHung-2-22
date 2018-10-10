<?php 
	include 'models/Student.php';		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	<form method="get">
		<p>User</p>
		<input type="text" name="username" placeholder="Nhap user...">
		<br>
		<p>lastname</p> 
		<input type="text" name="lastname" placeholder="Nhap lastname...">
		<br>
		<p>firstnam</p>
		<input type="text" name="firstname" placeholder="Nhap firstname...">
		<br>
		<p>GPA</p>
		<input type="text" name="gpa" placeholder="Nhap gpa...">
		<br>
		<br>
		<input type="submit" value="Nhap">
	</form>
	<table border="1">
		<tr>
			<th>Username</th>
			<th>Full name</th>
			<th>GPA</th>
			<th>Rank</th>
		</tr>
		<tr>
			<?php if (empty($_GET) == true): ?>
        	<?php echo " "; ?>
	        <?php endif;?>
		    <?php if(empty($_GET) == false): ?>
		    	<td>
		    		<?php echo $User = ($_GET['username']);?>
		    	</td>
		    	<td>
		    		<?php echo $User = ($_GET['lastname']).($_GET['firstname']);?>
		    	</td>
		    	<td>
		    		<?php echo $User = ($_GET['gpa']);?>
		    	</td>
		    	<td>
		    		<?php 
		    		echo $User = ($_GET['username']);?>
		    	</td>
		    <?php endif;?>
		</tr>
	</table>
</body>
</html>