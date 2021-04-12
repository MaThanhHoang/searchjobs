<meta charset="utf8">
<?php
include('ketnoi.php');
if (isset($_POST['taoCV'])) {
    //lấy thông tin từ các form bằng phương thức POST
    $HOVATEN = $_POST["txthovaten"]; //database tham chieu qua php
    $DIACHI =$_POST["txtdiachi"];
    $NGANHNGHE =$_POST["txtnganhnghe"];
    $HINHTHUCLAMVIEC =$_POST["txthinhthuc"];
    $SONAMKINHNGIEM=$_POST["txtkinhnghiem"];
    $BANGCAP   =$_POST["txtsonam"];
    $TINHOC =$_POST["txttinhoc"];
    $NGOAINGU = implode(",",$_POST['NgoaiNgu']);
    if (!$HOVATEN)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Lenh Truy van
    $lenhsql = "INSERT INTO hosocanhan
    (HOVATEN,DIACHI,NGANHNGHE,HINHTHUCLAMVIEC,SONAMKINHNGIEM,BANGCAP,TINHOC,NGOAINGU) 
    VALUES ( '".$HOVATEN."',
    '".$DIACHI."',
    '".$NGANHNGHE."',
    '".$HINHTHUCLAMVIEC."',
    '".$SONAMKINHNGIEM."',
    '".$BANGCAP."',
    '".$TINHOC."',
    '".$NGOAINGU."'
    )";
    $thucthi=mysqli_query($kn,$lenhsql) or die ("Khong them duoc");
    if (!$thucthi) {
		echo "Người dùng đã tồn tại vui lòng không trùng username và email !";
	}else{
        echo "Ban da them thong tin thanh cong. <a href='javascript: history.go(-2)'>Trở lại</a>";
		
	}
}
?>