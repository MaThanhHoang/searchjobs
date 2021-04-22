
<?php include 'inc/header.php'; ?>

<head>
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

<div class="container">
    <div class="form">
        <h2>Hồ sơ tuyển dụng</h2>
        <div class="group-input">
            <h6>Tên công ty:</h6>
            <input class="input" type="text"  placeholder="Nhập tên công ty" required><p>

            
            <h6>Địa chỉ công ty:</h6>
            <div class="form-group">
            <textarea cols="55" rows="3" placeholder="Nhập địa chỉ công ty"></textarea>
            </div><br>

            <h6>Mức lương:</h6>
            <div class="form-group">
            <select id="inputState" class="form-control">
                <option selected>Chọn mức luơng...</option>
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
            <select id="inputState" class="form-control">
                <option selected>Chọn khu vực...</option>
                <option>Miền bắc</option>
                <option>Miền trung</option>
                <option>Miền nam</option>
            </select>
            </div><br>

            <h6>Yêu cầu công việc:</h6>
            <div class="form-group">
            <textarea cols="55" rows="5" placeholder="Nhập yêu cầu công việc"></textarea>
            </div><br>


            <h6>Mô tả công việc:</h6>
            <div class="form-group">
            <textarea  cols="55" rows="5" placeholder="Nhập mô tả công việc"></textarea>
            </div><br>

            <h6>Chế độ đãi ngộ:</h6>
            <div class="form-group">
            <textarea  cols="55" rows="5" placeholder="Nhập chế độ đãi ngộ"></textarea>
            </div><br>
        </div>
        
    </div>
    <button type="button" class="btn btn-primary">Đăng tin</button>
</div>
<?php include 'inc/footer.php'; ?>