<?php 
	include 'users.php';
?>

<?php
	$obj_users = new users();
	$id = '';
	$user = '';
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$user = $obj_users->findUser($id);

	}
	else
	{
		die('error');
	}
?>
<form>
	ID: <input type="text" name='id' value="<?php echo $user['id'] ?>"></br>
	User name: <input type="text" name='username' value="<?php echo $user['id'] ?>"> </br>
	Password: <input type='password' name='password' value="<?php echo $user['id'] ?>"> </br>
	<input type="submit" value="Thêm mới">
</form>
<?php
	if(isset($_GET['username'])){
		$data = [
			'username' => $_GET['username'],
			'password' => $_GET['password'],
			'id' => $_GET['id']
		];

		$obj_users->updateUser($data);
	}
?>