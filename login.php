﻿<?php 
  session_start(); 	
  	unset($_SESSION['Login']);
	$_SESSION['Logout']="";
?>
<?php include 'inc/header.php' ?>

<head>
	<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
</head>

<div class="main-w3layouts wrapper">
	<h1>Đăng nhập</h1>
	<div class="main-agileinfo">
		<div class="agileits-top">
			<form action="#" method="post">
				<input class="text email" type="email" name="email" placeholder="Email" required="">
				<input class="text" type="password" name="password" placeholder="Password" required="">
				<div class="wthree-text">
					<br><br/>
					<label class="anim">
						<input type="checkbox" class="checkbox" required="">
						<span>Nhớ mật khẩu?</span>
					</label>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="ĐĂNG NHẬP">
				<?php include 'config/database.php'?>
<?php
	
	$taikhoan = @$_POST['email'];
	$matkhau = @$_POST['password'];
	//
	$caulenh ="SELECT * FROM TAIKHOAN WHERE EMAIL = '".$taikhoan."'";
	//
	$kq = mysqli_query($conn,$caulenh);
	$dong = mysqli_fetch_array($kq);
	//
	if(isset($taikhoan) && isset($matkhau))
	{
		if($taikhoan == $dong['EMAIL'])
		{
			if($dong['MATKHAU']==$matkhau)
			{
				$_SESSION['Login'] = $taikhoan;
				$_SESSION['Logout'];
				header('Location: ./index.php');
			}
			else
				echo"Sai password";
		}
		else
			echo "Tài khoản chưa tồn tại!";
	}
?>
			</form>
			<p>Bạn chưa có tài khoản?<a href="register.php"> Đăng kí</a></p>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>

