
<?php include 'inc/header.php'; ?>

<head>
	<link href="css/createCV.css" rel="stylesheet" type="text/css" media="all" />
</head>
<div class="menu-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav ">
            <li class="nav-item active ">
                <a class="nav-link active navbar-brand" href="index.php">Home</a>
            </li>
            <li class="nav-item active " >
                <a class="nav-link active navbar-brand" href="createJob.php">Đăng tin tuyển dụng</a>
            </li>
        </ul>
    </nav>
</div>

<div class="container">
    <div class="form">
        <h2>Hồ sơ cá nhân</h2>
        <div class="group-input">
            <h6>Họ và tên:</h6>
            <input class="input" type="text"  placeholder="Nhập họ tên" required><p>

            <h6>Nhập địa chỉ:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" placeholder="Nhập địa chỉ" required></textarea>
            </div><br>

            <h6>Ngày sinh:</h6>
            <div class="form-group row">
            <div class="col-10">
                <input class="form-control" type="date" value="2000-12-12" id="example-date-input">
            </div>
            </div>	<br>    

            <h6>Ngành nghề:</h6>
            <input class="input" type="text"  placeholder="Nhập ngành nghề" required><p>

            <h6>Điểm mạnh công việc:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" placeholder="Nhập điểm mạnh"></textarea>
            </div><br>


            <h6>Hình thức làm việc:</h6>
            <input class="input" type="text"  placeholder="Nhập hình thức làm việc" required><p>

            <h6>Số năm kinh nghiệm:</h6>
            <div class="form-group">
            <select id="inputState" class="form-control">
                <option selected>Chon kinh nghiệm </option>
                <option>Không có</option>
                <option>1 nam</option>
                <option>2 nam</option>
                <option>3 nam</option>
                <option>4 nam</option>
                <option>5 nam</option>
                <option>7 nam</option>
                <option>10 nam</option>
            </select>
            </div><br>

            <h6>Bằng cấp:</h6>
            <div class="form-group">
            <select id="inputState" class="form-control" require>
                <option selected>Chọn bằng cấp</option>
                <option>Không bằng cấp</option>
                <option>Trung cấp</option>
                <option>Đại học</option>
                <option>Trên đại học</option>
            </select>
            </div><br>

            <h6>Tin học:</h6>
            <input class="input" type="text" ><p>

            <h6>Ngoại ngữ:</h6>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="Anh" name="Anh" value="NgoaiNgu">
                <label for="NgoaiNgu">Tiếng Anh</label><br>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="Nhat" name="Nhat" value="NgoaiNgu">
                <label for="NgoaiNgu"> Tiếng Nhật</label><br>
            </div><div class="form-check form-check-inline">
                <input type="checkbox" id="Trung" name="Trung" value="NgoaiNgu">
                <label for="NgoaiNgu">Tiếng Trung</label><br>
            </div><br><br>

            <h6>Ngôn ngữ khác:</h6>
            <input class="input" type="text" ><p>


            <h6>Năng khiếu:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" placeholder="Nhập năng khiếu"></textarea>
            </div><br>

        </div>
        
    </div>
    <button type="button" class="btn btn-primary">Hoàn tất</button>
</div>
<?php include 'inc/footer.php'; ?>