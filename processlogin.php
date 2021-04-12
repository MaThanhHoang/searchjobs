<?php include 'config/database.php'?>
<?php
	$taikhoan = $_POST['email'];
	$matkhau = $_POST['password'];
	//
	$caulenh ="SELECT * FROM TAIKHOAN WHERE EMAIL = '".$taikhoan."'";
	//
	$kq = mysqli_query($conn,$caulenh);
	//
	if($dong = mysqli_fetch_array($kq))
	{
		if($dong['MATKHAU']==$matkhau)
		{
			header('Location: ./index.php');
			echo"hihi";
		}
		else
			echo"Sai password";
	}
	else
		echo"Tài khoản chưa tồn tại";
?>