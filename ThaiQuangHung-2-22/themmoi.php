<form>
	User name: <input type="text" name='username' placeholder="Nhập username..."> </br>
	Password: <input type="password" name="password" placeholder="Nhập password..."></br>
	<input type="submit" value="Thêm mới">
</form>

<?php include ('users.php'); ?>
<?php 
	if(isset($_GET['username'])){
		$data = [
			'username' => $_GET['username'], 'password' => $_GET['password'],
		];
		$obj_users = new users();

		$obj_users->insertUser($data);
	}
?>