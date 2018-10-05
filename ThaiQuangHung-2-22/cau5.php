<?php 
include ('./users.php');

$obj_users = new users();

//xoa
$id='';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$obj_users->deleteUser($id);
}
//tìm kiếm
$keyword = '';
if(isset($_GET['keyword'])){
	$keyword = $_GET['keyword'];
}

$users = $obj_users->getUsers($keyword);

?>
<html>
<head>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/font-awesome.min.css">
<link href="public/css/type-12.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 border">
			<div class="type">Our team</div>
			<form>
				<input type="text" name="keyword" placeholder="Nhập từ khóa">
				<input type="submit" value="Tìm kiếm">
			</form>
			<div class="row">

				<?php foreach($users as $user): ?>

				<div class="col-md-4 col-sm-6 col-xs-12 class">
					<div class="submit">
						<a href='cau5.php?id=<?php echo $user['id'] ?>'>Xóa</a>

						<a href='cau5.php?id=<?php echo $user['id'] ?>'>Cập Nhật</a>
					</div>
					<div class="hover">
					<div class="images">
						<img = src="public/images/photo_1.png" alt="imgAlt">
					</div>
					</div>
				<div class="tieude">

					<a href="#"><h3><?php echo $user['username']?></h3></a>

				</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</body>
</html>