
<?php include 'inc/header.php'; ?>

<head>
	<link href="css/createCV.css" rel="stylesheet" type="text/css" media="all" />
</head>

<div class="container">
    <div class="form">
        <h2>Hồ sơ cá nhân</h2>
        <div class="group-input">
            <h6>Họ và tên:</h6>
            <input class="input" type="text"  placeholder="Nhập họ tên" required><p>

            <h6>Giới tính:</h6>
            <div class="form-group">
            <select id="inputState" class="form-control">
                <option selected>Chon gioi tinh</option>
                <option>Nam</option>
                <option>Nu</option>
            </select>
            </div><br>

            <h6>Ngày sinh:</h6>
            <div class="form-group row">
            <div class="col-10">
                <input class="form-control" type="date" value="2020-12-12" id="example-date-input">
            </div>
            </div>	<br>

            <h6>Nhập địa chỉ:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" placeholder="Nhap địa chỉ"></textarea>
            </div><br>

            <h6>Email:</h6>
            <input class="input" type="text"  placeholder="Nhập email" required><p>

            <h6>Nganh nghe:</h6>
            <input class="input" type="text"  placeholder="Nhập nganh nghe" required><p>


            <h6>Hinh thuc lam viec:</h6>
            <input class="input" type="text"  placeholder="Nhập hinh thuc lam viec" required><p>

            <h6>So nam kinh nghiem:</h6>
            <input class="input" type="text"  placeholder="Nhập so nam kinh nghiem" required><p>

            <h6>Bang cap:</h6>
            <div class="form-group">
            <select id="inputState" class="form-control">
                <option selected>Chon bang cap</option>
                <option>1 nam</option>
                <option>2 nam</option>
                <option>3 nam</option>
                <option>4 nam</option>
                <option>5 nam</option>
                <option>7 nam</option>
                <option>10 nam</option>
            </select>
            </div><br>

            <h6>Ngoai ngu:</h6>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="Anh" name="Anh" value="NgoaiNgu">
                <label for="NgoaiNgu">Tieng Anh</label><br>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="Nhat" name="Nhat" value="NgoaiNgu">
                <label for="NgoaiNgu"> Tieng Nhat</label><br>
            </div><div class="form-check form-check-inline">
                <input type="checkbox" id="Trung" name="Trung" value="NgoaiNgu">
                <label for="NgoaiNgu">Tieng Trung</label><br>
            </div>
        </div>
        
    </div>
    <button type="button" class="btn btn-primary">Hoan tat</button>
</div>
<?php include 'inc/footer.php'; ?>