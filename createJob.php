<?php include 'inc/header.php'; ?>
<?php session_start(); ?>
<?php 
    if(isset($_SESSION['Login'])){
            $user = $_SESSION['Login'];
        }
        else
            header('location:index.php');
 ?>
<head>
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
    <link href="css/createJob.css" rel="stylesheet" type="text/css" media="all" />
</head>
<div class="menu-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav ">
            <li class="nav-item active" style="margin-left: 50px;">
                <a class="nav-link active navbar-brand" href="index.php">Home</a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link active navbar-brand" href="createCV.php">Tạo hồ sơ</a>
            </li>
      </ul>
    </nav>
</div>

<form action="" method="post">  
<div class="container">
    <div class="form">
        <h2>Hồ sơ tuyển dụng</h2>
        <div class="group-input">
            <h6>Tên công ty:</h6>
            <input class="input" type="text" name="txtTencongty" placeholder="Nhập tên công ty" required><p>
            <h6>Địa chỉ công ty:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" name="txtDiachi" placeholder="Nhập địa chỉ công ty"></textarea>
            </div><br>
            <h6>Mức lương:</h6>
            <div class="form-group">
            <select id="inputState" name="txtLuong" class="form-control">
              
                <option>1 - 3 trieu</option>
                <option>3 - 5 trieu</option>
                <option>5 - 7 trieu</option>
                <option>7 - 10 trieu</option>
                <option>10 - 15 trieu</option>
                <option>15 - 20 trieu</option>
                <option>Hon 20 trieu</option>
            </select>
            </div><br>

            <h6>Khu vực:</h6>
            <div class="form-group">
            <select id="inputState" name="txtKhuvuc" class="form-control">
               
                <option>Miền Bắc</option>
                <option>Miền Trung</option>
                <option>Miền Nam</option>
            </select>
            </div><br>

            <h6>Yêu cầu công việc:</h6>
            <div class="form-group">
            <textarea cols="55" rows="5" name="txtYeucau" placeholder="Nhập yêu cầu công việc"></textarea>
            </div><br>


            <h6>Mô tả công việc:</h6>
            <div class="form-group">
            <textarea  cols="55" rows="5" name="txtMota" placeholder="Nhập mô tả công việc"></textarea>
            </div><br>

            <h6>Chế độ đãi ngộ:</h6>
            <div class="form-group">
<textarea  cols="55" rows="5" name="txtDaingo" placeholder="Nhập chế độ đãi ngộ"></textarea>
            </div><br>

            <h6>Ngày đăng:</h6>
            <div class="form-group row">
            <div class="col-10">
            <input class="form-control" name="txtNgaydang" type="date" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}">

            </div>
            </div>  <br>  
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="btncreatejob" onclick="onclick()">Đăng tin</button>
    <script>
        function onclick(){
            location.assign("index.php");
            alert ("Thêm công việc thành công!");
           
        }
    </script>  
</div>

<meta charset="utf8"
<?php  
    include('config/database.php');
    if (isset($_POST['btncreatejob'])) {
        $TENCONGTY = $_POST["txtTencongty"];
        $DIACHI = $_POST["txtDiachi"];
        $LUONG = $_POST["txtLuong"];
        $KHUVUC = $_POST["txtKhuvuc"];
        $YEUCAU = $_POST["txtYeucau"];
        $MOTA = $_POST["txtMota"];
        $DAINGO = $_POST["txtDaingo"];
        $NGAYDANG = $_POST["txtNgaydang"];


        $query = mysqli_query($conn, "select COUNT(*) FROM `congviec` ");
                 
        if ($row = mysqli_fetch_assoc($query)) {
            echo $row['COUNT(*)'] . " " . "việc làm";  
            if( $row['COUNT(*)'] <10)
            {
                $IDVIEC = 'CBN-06-00'.($row['COUNT(*)']+1);
                $IDCTY = 'CT-00'.($row['COUNT(*)']+1);
            }
            if( $row['COUNT(*)'] >=10 && $row['COUNT(*)']<99)
            {
                $IDVIEC = 'CBN-06-0'.($row['COUNT(*)']+1);
                $IDCTY = 'CT-0'.($row['COUNT(*)']+1) ;
            }
        }
    
        $addsql = "INSERT INTO `CONGVIEC`(`IDVIECLAM`, `IDCONGTY`, `TENCONGTY`, `LUONG`, `VUNGMIEN`, `CHEDODAINGO`, `NGAYDANG`, `YEUCAUCONGVIEC`, `MOTACONGVIEC`, `DIACHI`) VALUES ('".$IDVIEC."','".$IDCTY."','".$TENCONGTY."', '".$LUONG."', '".$KHUVUC."', '".$DAINGO."', '".$NGAYDANG."', '".$YEUCAU."', '".$MOTA."', '".$DIACHI."')";
    

 
    $thucthi=mysqli_query($conn,$addsql ) or die ("Khong them duoc");
    if (!$thucthi) {
		echo "Không thêm được !";
	}else{
     echo " <h3><a href='index.php'>Ban da them thong tin thanh cong.</a></h3>";
		
	}



	




    
    }  
?>
<?php include 'inc/footer.php'; ?>
</form>