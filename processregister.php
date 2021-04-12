<?php include 'config/database.php'?>
<?php
	//post
	$username = @$_POST['Username'];
	$email = @$_POST['email'];
	$password = @$_POST['password'];
	$confirmoassword = @$_POST['confirmpassword'];
	//id
	$sql = "SELECT IDTK FROM TAIKHOAN WHERE IDTK != 0";
	$old = mysqli_query($conn,$sql);
	$cou = mysqli_num_rows($old);
	$id = $cou + 1;
	//insert
	if(isset($_POST['submit']) && $password == $confirmoassword){
	//check email
		$cod = "SELECT * FROM TAIKHOAN WHERE EMAIl = '$email'";
		$pro = mysqli_query($conn,$cod);
		$rows = mysqli_num_rows($pro);
		if($rows==0){
			$insert = "INSERT INTO TAIKHOAN(IDTK,TAIKHOAN,EMAIL,MATKHAU) VALUES ('$id','$username','$email','$password')";
			mysqli_query($conn,$insert);
			echo"Đăng ký thành công!";
		}
		else{
			if(isset($_POST['submit']) && $rows !=0){
				echo"Email đã đăng ký";
			}
		}
	}
	else{
		if(isset($_POST['submit']) && $password != $confirmoassword)
			echo"Mật khẩu không khớp!";
	}
?>