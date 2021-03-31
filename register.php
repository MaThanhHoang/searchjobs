<?php include 'inc/header.php'; ?>
<?php
	if(isset($_POST['submit']) && $_POST['Username'] !='' && $_POST['Email'] !='' && $_POST['Password'] !='' && $_POST['confirmpassword'] !=''){
		$username = $_POST['Username'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$confirmpassword = $_POST['confirmpassword'];
		if($password != $confirmpassword){
			header('Location: http://localhost:81/searchjobs/register.php');
		}
		$sql = "SELECT * FROM TAIKHOAN WHERE TAIKHOAN = '$username'";
		$old = mysqli_query($conn,$sql);
		if(mysqli_num_rows($old) > 0){
			echo "Tài khoản đã tồn tại!";
			header('Location: http://localhost:81/searchjobs/register.php');
		}
		else{
			$insert = "INSERT INTO TAIKHOAN(TAIKHOAN,EMAIL,MATKHAU) VALUES ('$username','$email','$password')";
			mysqli_query($conn,$insert);
			header('Location: http://localhost:81/searchjobs/');
		}
	}
	else{
		header('Location: http://localhost:81/searchjobs/register.php');
	}
?>
<head>
	<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
</head>

<div class="main-w3layouts wrapper">
	<h1>Đăng kí tài khoản</h1>
	<div class="main-agileinfo">
		<div class="agileits-top">
			<form action="#" method="post">
				<input class="text" type="text" name="Username" placeholder="Username" required="">
				<input class="text email" type="email" name="email" placeholder="Email" required="">
				<input class="text" type="password" name="password" placeholder="Password" required="">
				<input class="text w3lpass" type="password" name="confirmpassword" placeholder="Confirm Password" required="">
				<div class="wthree-text">
					
					<div class="clear"> </div>
				</div>
				<input type="submit" value="ĐĂNG KÍ">
			</form>
			<p>Bạn đã có tài khoản?<a href="login.php"> Đăng nhập</a></p>
		</div>
	</div>
</div>

<?php include 'inc/footer.php'; ?>