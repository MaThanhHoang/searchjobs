<?php include 'inc/header.php'; ?>

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
				<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
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