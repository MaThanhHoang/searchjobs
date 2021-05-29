<meta charset="utf8">
<?php session_start() ?>
<?php
include('config/database.php');
if (isset($_POST['taoCV'])) {
    //lấy thông tin từ các form bằng phương thức POST
    $HOVATEN = $_POST["txthovaten"]; //database tham chieu qua php
    $DIACHI =$_POST["txtdiachi"];
    $NGAYSINH =$_POST['txtngaysinh'];
    $NGANHNGHE =$_POST["txtnganhnghe"];
    $DIEMMANHCONGVIEC =$_POST['txtdiemmanh'];
    $HINHTHUCLAMVIEC =$_POST["txthinhthuc"];
    $SONAMKINHNGIEM=$_POST["txtkinhnghiem"];
    $BANGCAP   =$_POST["txtbangcap"];
    $TINHOC =$_POST["txttinhoc"];
    //$TIENGANH = implode(",",$_POST['NgoaiNgu']);
    $TIENGANH =$_POST['txttienganh'];
    //$TIENGNHAT =$_POST['txtnhat'];
     $TIENGNHAT =$_POST ["txtnhats"];
     $TIENGKHAC1 =$_POST ["NgoaiNgu"];
    $TIENGKHAC =$_POST['txtngonnguphu'];
    $NANGKHIEU =$_POST['txtnangkhieu'];
    if (!$HOVATEN)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
$TIENGCHUNG = $TIENGKHAC." ". $TIENGKHAC1;
    //Lenh Truy van
    $lenhsql = "INSERT INTO hosocanhan
    (HOVATEN,DIACHI,NGAYSINH,NGANHNGHE,DIEMMANHCONGVIEC,HINHTHUCLAMVIEC,SONAMKINHNGIEM,BANGCAP,TINHOC,TIENGANH,TIENGNHAT,TIENGKHAC,NANGKHIEU)
    VALUES ( '".$HOVATEN."',
    '".$DIACHI."',
    '".$NGAYSINH."',
    '".$NGANHNGHE."',
    '".$DIEMMANHCONGVIEC."',
    '".$HINHTHUCLAMVIEC."',
    '".$SONAMKINHNGIEM."',
    '".$BANGCAP."',
    '".$TINHOC."',
    '".$TIENGANH."',
 '".$TIENGNHAT."',
    '".$TIENGCHUNG ."',
    '".$NANGKHIEU."'
    )";
    $thucthi=mysqli_query($conn,$lenhsql) or die ("Khong them duoc");
    if (!$thucthi) {
		echo "Người dùng đã tồn tại vui lòng không trùng username và email !";
	}else{
        echo " <h3><a href='index.php'>Ban da them thong tin thanh cong.</a></h3>";
		
	}
}
?>