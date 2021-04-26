<?php 
  session_start(); 
  if(!isset($_SESSION['Login']))
  {
    $_SESSION['Login'] = "Đăng nhập";
    $_SESSION['Register'] = "Đăng ký";
  }
  else 
    $_SESSION['Register'] = "Đăng xuất";
?>
<?php include 'inc/header.php'; ?>

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
          <a class="nav-link active" aria-current="page" href="login.php"><span><?php echo $_SESSION['Login']?></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" tabindex="-1" aria-disabled="true"
            <?php
                $link;
                if($_SESSION['Register']=="Đăng ký"){ 
                  $link="register.php";
                }else
                  $link="Login.php";
            ?>
            href="<?php echo $link ?>";
          >
          <span><?php echo $_SESSION['Register']?></span>
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
        <select name="object">
          <option value="which" selected="selected">Tìm việc</option>
          <option value="who">Tìm ứng viên</option>
        </select>
        <select name="location">
          <option value="bac" selected="selected">Miền Bắc</option>
          <option value="trung">Miền Trung</option>
          <option value="nam">Miền Nam</option>
        </select>
        <button type="button" class="btn btn-primary">Search</button>
      </div>
    </div>
    <button type="button" class="btn btn-primary" style="margin-left: 300px ">Tạo CV</button>
    <button type="button" class="btn btn-primary btn-second" style="background-color: #d22d65">Đăng tin tuyển dụng</button>
  </div>
  <h1> Việc làm tuyển gấp</h1>
  
  <form></form>

  <?php include 'inc/footer.php'; ?>
