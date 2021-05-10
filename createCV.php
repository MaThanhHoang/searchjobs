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
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link href="css/createCV.css" rel="stylesheet" type="text/css" media="all" />
</head>
<div class="menu-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav ">
            <li class="nav-item active ">
                <a class="nav-link active navbar-brand" href="index.php#">Home</a>
            </li>
            <li class="nav-item active " >
                <a class="nav-link active navbar-brand" href="createJob.php">Đăng tin tuyển dụng</a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link active navbar-brand" href="phantrang.php">Lịch sử hồ sơ</a>
            </li>
        </ul>
    </nav>
</div>
<form action="insertCV.php" method="post">
<div class="container">
      <div class="form">
        <h2>Hồ sơ cá nhân</h2>
        <div class="group-input">
            <h6>Họ và tên:</h6>
            <input class="input" type="text" name="txthovaten" placeholder="Nhập họ tên" ><p>

            <h6>Nhập địa chỉ:</h6>
            <div class="form-group">
            <input class="input" type="text" name="txtdiachi" placeholder="Nhập địa chỉ" ></input>
            </div><br>

            <h6>Ngày sinh:</h6>
            <div class="form-group row">
            <div class="col-10">
                <input class="form-control" name="txtngaysinh" type="date">
            </div>
            </div>	<br>    

            <h6>Ngành nghề:</h6>
            <input class="input" type="text" name="txtnganhnghe"  placeholder="Nhập ngành nghề" ><p>

            <h6>Điểm mạnh công việc:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" name="txtdiemmanh" placeholder="Nhập điểm mạnh"></textarea>
            </div><br>


            <h6>Hình thức làm việc:</h6>
            <input class="input" type="text" name="txthinhthuc" placeholder="Nhập hình thức làm việc" ><p>

            <h6>Số năm kinh nghiệm:</h6>
            <div class="form-group">
            <select id="inputState" name="txtkinhnghiem" class="form-control">
                <option value="Null">Không có</option>
                <option value="1">1 nam</option>
                <option value="2">2 nam</option>
                <option value="3">3 nam</option>
                <option value="4">4 nam</option>
            </select>
            </div><br>

            <h6>Bằng cấp:</h6>
            <div class="form-group">
            <select id="inputState" name="txtbangcap" class="form-control" require>
                <option value="null">Không bằng cấp</option>
                <option value="Trung Cap">Trung cấp</option>
                <option value="Đại Học">Đại học</option>
                <option value="Tren Dai Hoc">Trên đại học</option>
            </select>
            </div><br>

            <h6>Tin học:</h6>
            <input class="input" name="txttinhoc" type="text" ><p>

            <h6>Ngoại ngữ:</h6>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="Anh" name="txttienganh" value="Tieng ANh">
                <label for="NgoaiNgu">Tiếng Anh</label><br>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="Nhat" name="txtnhats" value="Tieng Nhat">
                <label for="NgoaiNgu"> Tiếng Nhật</label><br>
            </div><div class="form-check form-check-inline">
                <input type="checkbox" id="Trung" name="NgoaiNgu[]" value="Tieng Trung">
                <label for="NgoaiNgu">Tiếng Trung</label><br>
            </div><br><br>

            <h6>Ngôn ngữ khác:</h6>
            <input class="input" name="txtngonnguphu" type="text" ><p>


            <h6>Năng khiếu:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" name="txtnangkhieu" placeholder="Nhập năng khiếu"></textarea>
            </div><br>

        </div>
        
    </div>
    <button type="submit "  onclick="myFunction()" name="taoCV" class="btn btn-primary">Hoàn tất</button>
    </div>
</form>

<?php include 'inc/footer.php'; ?>