<?php include 'inc/header.php';?>

  <div id="menu_top">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class=" navbar-collapse">
        <ul class="navbar-nav ">
          <li class="nav-item active ">
            <a class="nav-link active navbar-brand" href="index.html">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php"><span>Đăng nhập</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">
              Đăng ký
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="panner">
      <div class="background-input">
        <p> Tìm kiếm công việc</p>
        <div class="input-group">
          <input type="text" placeholder="Nhập tên công ty,tên công việc, kỹ năng . . . ." />
          <button type="button" class="btn btn-primary">Search</button>
        </div>
      </div>
      <button type="button" class="btn btn-primary" style="margin-left: 300px ">Tạo hồ sơ</button>
      <button type="button" class="btn btn-primary btn-second" style="background-color: #d22d65">Đăng tin</button>
    </div>
    <h1> Việc làm tuyển gấp</h1>

<?php include 'inc/footer.php';?>