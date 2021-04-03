
<?php include 'inc/header.php'; ?>

<head>
	<link href="css/createJob.css" rel="stylesheet" type="text/css" media="all" />
</head>

<div class="container">
    <div class="form">
        <h2>Hồ sơ tuyển dụng</h2>
        <div class="group-input">
            <h6>Tên công ty:</h6>
            <input type="text"  placeholder="Nhập tên công ty" required><p>

            <h6>Mức lương:</h6>
            <div class="form-group">
            <select id="inputState" class="form-control">
                <option selected>Chon muc luong...</option>
                <option>1 - 3 trieu</option>
                <option>3 - 5 trieu</option>
                <option>5 - 7 trieu</option>
                <option>7 - 10 trieu</option>
                <option>10 - 15 trieu</option>
                <option>15 - 20 trieu</option>
                <option>Hon 20 trieu</option>
            </select>
            </div><br>

            <h6>Địa chỉ công ty:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" placeholder="Nhap địa chỉ công ty"></textarea>
            </div><br>

            <h6>Khu vực:</h6>
            <div class="form-group">
            <select id="inputState" class="form-control">
                <option selected>Chon khu vuc...</option>
                <option>Mien bac</option>
                <option>Mien trung</option>
                <option>Mien nam</option>
            </select>
            </div><br>

            <h6>Hạn nộp hồ sơ:</h6>
            <div class="form-group row">
            <div class="col-10">
                <input class="form-control" type="date" value="2020-12-12" id="example-date-input">
            </div>
            </div>	<br>

            <h6>Yêu cầu công việc:</h6>
            <div class="form-group">
            <textarea cols="55" rows="5" placeholder="Nhap yeu cau cong việc"></textarea>
            </div><br>


            <h6>Mô tả công việc:</h6>
            <div class="form-group">
            <textarea  cols="55" rows="5" placeholder="Nhap mo ta cong việc"></textarea>
            </div><br>

            <h6>Chế độ đãi ngộ:</h6>
            <div class="form-group">
            <textarea  cols="55" rows="5" placeholder="Nhap mo ta cong việc"></textarea>
            </div><br>

            <h6>Yêu cầu hồ sơ:</h6>
            <div class="form-group group-required">
                <label>- Don xin viec</label><br>
                <label>- So yeu ly lich</label>
                <label>- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.</label>
                <label>- Các bằng cấp có liên quan.</label>
            </div><br>
        </div>
        
    </div>
    <button type="button" class="btn btn-primary">Dang tin</button>
</div>
<?php include 'inc/footer.php'; ?>