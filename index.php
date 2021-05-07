<?php 
  session_start(); 
?>
<?php include 'inc/header.php'; ?>
<head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
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
          <a class="nav-link active" aria-current="page" href="login.php"><span><?php 
            if(isset($_SESSION['Login'])){
              echo $_SESSION['Login'];
            }
            else
            echo "Đăng nhập";
        ?></span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="register.php"  tabindex="-1" aria-disabled="true">
        <span><?php 
            if(isset($_SESSION['Logout'])){
              echo $_SESSION['Logout'] = "Đăng Xuất";
            }
            else
            echo "Đăng ký";
        ?></span>
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
    
    <button type="button" id="abc" name="taoCV" class="btn btn-primary"  onclick=" dieu_huong()" style="margin-left: 300px " >Tạo CV</button>
    <script>
        function dieu_huong(){
            location.assign("createCV.php");
            alert ("Kiểm tra đăng nhập, nếu đã đăng nhập có thể bỏ qua thông báo");
           
        }
    </script>   
    <button type="button" class="btn btn-primary btn-second" style="background-color: #d22d65">Đăng tin tuyển dụng</button>
  </div>
  <h1> Việc làm tuyển gấp</h1>
   


  <form></form>

  <?php include 'inc/footer.php'; ?>