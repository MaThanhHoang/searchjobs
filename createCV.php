<?php include 'inc/header.php'; ?>

<head>
    <link href="css/createCV.css" rel="stylesheet" type="text/css" media="all" />
</head>
|<form action="insertCV.php" method="post">
    <div class="container">
        <div class="form">
            <h2>Hồ sơ cá nhân</h2>
            <div class="group-input">
                <h6>Họ và tên:</h6>
                <input class="input" type="text" placeholder="Nhập họ tên" name="txthovaten">
                <p>

                    <h6>Chọn địa chỉ đi bro:</h6>
                    <div class="form-group">
                        <select id="inputState" class="form-control" name="txtdiachi">
                            <option value="Miền Bắc">Miền Bắc</option>
                            <option value="Miền Trung">Miền Trung</option>
                            <option value="Miền Nam">Miền Nam</option>
                        </select>
                    </div><br>

                    <h6>Nganh nghe:</h6>
                    <input class="input" type="text" name="txtnganhnghe" placeholder="Nhập nganh nghe">
                    <p>


                        <h6>Hinh thuc lam viec:</h6>
                        <input class="input" type="text" name="txthinhthuc" placeholder="Nhập hinh thuc lam viec">
                        <p>

                            <h6>Số năm kinh nghiệm:</h6>
                            <div class="form-group">
                                <select id="inputState" class="form-control" name="txtkinhnghiem">
                                    <option value="1">1 nam</option>
                                    <option value="2">2 nam</option>
                                    <option value="3">3 nam</option>
                                    <option value="4">4 nam</option>
                                    <option value="5">5 nam</option>
                                </select>
                            </div><br>

                            <h6>Bang cap:</h6>
                            <div class="form-group">
                                <select id="inputState" class="form-control" name="txtsonam">
                                    <option selected>Chon bang cap</option>
                                    <option value="Đại Học">Đại Học</option>
                                    <option value="Cao Học">Cao Học</option>
                                    <option value="Tiến Sĩ">Tiến Sĩ</option>
                                    <option value="Giáo Sư">Giáo Sư</option>
                                </select>
                            </div><br>

                            <h6>Tin Hoc:</h6>
                            <input class="input" type="text" name="txttinhoc" placeholder="Nhập tin học">
                            <p>

                                <h6>Ngoai ngu:</h6>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" id="Anh" name="NgoaiNgu[]" value="Anh">
                                    <label for="NgoaiNgu">Tieng Anh</label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" id="Nhat" name="NgoaiNgu[]" value="Nhat">
                                    <label for="NgoaiNgu"> Tieng Nhat</label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" id="Trung" name="NgoaiNgu[]" value="Trung">
                                    <label for="NgoaiNgu">Tieng Trung</label><br>
                                </div>
            </div>

        </div>
    </div>
        <input class="btn btn-primary" type="submit" name="taoCV" value="Hoan Thanh" />
</form>
<?php include 'inc/footer.php'; ?>