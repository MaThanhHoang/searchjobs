<?php include 'inc/header.php'; ?>
<?php include 'config/database.php'; ?>
<form action="" method="post" name="main-form">
	<div id="menu_top">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class=" navbar-collapse">
				<ul class="navbar-nav ">
					<li class="nav-item active "><a
						class="nav-link active navbar-brand" href="index.html">Home</a></li>
				</ul>
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link active" aria-current="page"
						href="login.php"><span>Đăng nhập</span></a></li>
					<li class="nav-item"><a class="nav-link active" href="register.php"
						tabindex="-1" aria-disabled="true"> Đăng ký </a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="panner">
			<div class="background-input">
				<p>Tìm kiếm công việc</p>
				<div class="input-group">
					<input type="text" name="timkiemtheotext" id="username" value=""
						placeholder="Nhập tên công ty,tên công việc, kỹ năng . . . ." /> <select
						name="object">
						<option value="which" selected="selected">Tìm việc</option>
						<option value="who">Tìm ứng viên</option>
					</select> <select name="location">
						<option value="bac" selected="selected">Miền Bắc</option>
						<option value="trung">Miền Trung</option>
						<option value="nam">Miền Nam</option>
						<option value="whole">Toàn bộ</option>
					</select> <input type="submit" class="btn btn-primary"
						value="search" name="timkiem">Search
					</button>
				</div>
			</div>
			<input type="submit" class="btn btn-primary"
				style="margin-left: 300px">Tạo CV </input> <input type="submit"
				class="btn btn-primary btn-second" style="background-color: #d22d65">Đăng
			tin tuyển dụng </input>
		</div>
		<h1>Việc làm tuyển gấp</h1>
		<br> <br>
		<section>
			<article id="slvl">
    <?php
    
    if (@$_POST['timkiemtheotext'] == "") {
        $query = mysqli_query($conn, "select COUNT(*) FROM `congviec` ");
        if ($row = mysqli_fetch_assoc($query)) {
            echo $row['COUNT(*)'] . " " . "việc làm";
        }
    ?>
    		
    	
   
    
    </article>
			<article>
 
        <?php
        
        $mien = "none";
        $nguoi = 0;
        $viec = 0;
        
        if (@$_POST['timkiem'] == "search" && @$_POST['location'] == "bac" && @$_POST['object'] == "which") {
            $mien = "Miền Bắc";
            $viec = 1;
        } elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "trung" && @$_POST['object'] == "which") {
            $mien = "Miền Trung";
            $viec = 1;
        } elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "nam" && @$_POST['object'] == "which") {
            $mien = "Miền Nam";
            $viec = 1;
        } 
        elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "bac" && @$_POST['object'] == "who") {
            $mien = "Miền Bắc";
            $nguoi = 1;
        } elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "trung" && @$_POST['object'] == "who") {
            $mien = "Miền Trung";
            $nguoi = 1;
        } elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "nam" && @$_POST['object'] == "who") {
            $mien = "Miền Nam";
            $nguoi = 1;
        }        
        // Tìm kiếm theo người Ứng tuyển
        
        elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "whole" && @$_POST['object'] == "who") {
            $query = mysqli_query($conn, "select * FROM `hosocanhan`");
            while ($row = mysqli_fetch_assoc($query)) {
                echo '
<table id="wrap">
						    
<tr class="left">
        <th class="yeucaucongviec"><a href="#">' . $row['HOVATEN'] . '</a></th>
		<th class="tencongty"><a href="#">Hình thức: ' . $row['HINHTHUCLAMVIEC'] . '</a></th>
        <th class="luong"><a href="#">Ngành Nghề: ' . $row['NGANHNGHE'] . '</a></th>
		<th class="vungmien"><a href="#">🌍 Vùng Miền: ' . $row['DIACHI'] . '</a></th>
        <th class="diachi"><a href="#">Số năm kinh nghiệm: ' . $row['SONAMKINHNGIEM'] . '</a></th>
</tr>
<tr class="right">
    
        <th class="ngaydang"><a href="#">Bằng cấp :' . $row['BANGCAP'] . '</a></th>
		<th class="chedodaingo"><a href="#">Tin học: ' . $row['TINHOC'] . '</a></th>
		<th class="motacongviec"><a href="#">Ngoại ngữ :' . $row['NGOAINGU'] . '</a></th>
</tr>
            
            
		</table>
';
            }
        }        // End tìm người ứng tuyển
        
        elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "whole" && @$_POST['object'] == "which" || @$_POST['location'] == "") {
            $query = mysqli_query($conn, "select * FROM `congviec`");
            while ($row = mysqli_fetch_assoc($query)) {
                echo '
<table id="wrap">
						    
<tr class="left">
        <th class="yeucaucongviec"><a href="#">' . $row['YEUCAUCONGVIEC'] . '</a></th>
		<th class="tencongty"><a href="#">' . $row['TENCONGTY'] . '</a></th>
        <th class="luong"><a href="#">$ Lương: ' . $row['Luong'] . '</a></th>
		<th class="vungmien"><a href="#">🌍 Vùng Miền: ' . $row['VUNGMIEN'] . '</a></th>
        <th class="diachi"><a href="#">🏬 Địa chỉ: ' . $row['DIACHI'] . '</a></th>
</tr>
<tr class="right">
    
        <th class="ngaydang"><a href="#">🕑 Ngày đăng :' . $row['NGAYDANG'] . '</a></th>
		<th class="chedodaingo"><a href="#">Đãi ngộ: ' . $row['CHEDODAINGO'] . '</a></th>
		<th class="motacongviec"><a href="#">Mô tả :' . $row['MOTACONGVIEC'] . '</a></th>
</tr>
            
            
		</table>
';
            }
        }
        
        if ($viec == 1) {
            $query = mysqli_query($conn, 'SELECT * FROM `congviec` WHERE `VUNGMIEN`="' . $mien . '"');
            while ($row = mysqli_fetch_assoc($query)) {
                echo '
<table id="wrap">
   	
<tr class="left">
        <th class="yeucaucongviec"><a href="#">' . $row['YEUCAUCONGVIEC'] . '</a></th>
		<th class="tencongty"><a href="#">' . $row['TENCONGTY'] . '</a></th>  
        <th class="luong"><a href="#">$ Lương: ' . $row['Luong'] . '</a></th>
		<th class="vungmien"><a href="#">🌍 Vùng Miền: ' . $row['VUNGMIEN'] . '</a></th>
        <th class="diachi"><a href="#">🏬 Địa chỉ: ' . $row['DIACHI'] . '</a></th>
</tr>
<tr class="right">

        <th class="ngaydang"><a href="#">🕑 Ngày đăng :' . $row['NGAYDANG'] . '</a></th>
		<th class="chedodaingo"><a href="#">Đãi ngộ: ' . $row['CHEDODAINGO'] . '</a></th>
		<th class="motacongviec"><a href="#">Mô tả :' . $row['MOTACONGVIEC'] . '</a></th>
</tr>


		</table>
';
            }
        }
        
        if ($nguoi == 1) {
            $query = mysqli_query($conn, 'SELECT * FROM `hosocanhan` WHERE `DIACHI`="' . $mien . '"');
            while ($row = mysqli_fetch_assoc($query)) {
                echo '
<table id="wrap">
						    
<tr class="left">
        <th class="yeucaucongviec"><a href="#">' . $row['HOVATEN'] . '</a></th>
		<th class="tencongty"><a href="#">Hình thức: ' . $row['HINHTHUCLAMVIEC'] . '</a></th>
        <th class="luong"><a href="#">Ngành Nghề: ' . $row['NGANHNGHE'] . '</a></th>
		<th class="vungmien"><a href="#">🌍 Vùng Miền: ' . $row['DIACHI'] . '</a></th>
        <th class="diachi"><a href="#">Số năm kinh nghiệm: ' . $row['SONAMKINHNGIEM'] . '</a></th>
</tr>
<tr class="right">
    
        <th class="ngaydang"><a href="#">Bằng cấp :' . $row['BANGCAP'] . '</a></th>
		<th class="chedodaingo"><a href="#">Tin học: ' . $row['TINHOC'] . '</a></th>
		<th class="motacongviec"><a href="#">Ngoại ngữ :' . $row['NGOAINGU'] . '</a></th>
</tr>
            
            
		</table>
';
            }
        }
    }
    
    // TÌM KIẾM CÔNG VIỆC NHẬP VÀO
    
    if (@$_POST['timkiemtheotext'] != "") {
        $sl = 0;
        $query = mysqli_query($conn, 'SELECT *, COUNT(*) FROM `congviec` WHERE `TENCONGTY` LIKE "%' . @$_POST['timkiemtheotext'] . '%" OR `YEUCAUCONGVIEC` LIKE "%' . @$_POST['timkiemtheotext'] . '%"OR `DIACHI` LIKE "%' . @$_POST['timkiemtheotext'] . '%"OR `VUNGMIEN` LIKE "%' . @$_POST['timkiemtheotext'] . '%"OR `MOTACONGVIEC` LIKE "%' . @$_POST['timkiemtheotext'] . '%"');
        while ($row = mysqli_fetch_assoc($query)) {
            
            $sl = @$row['COUNT(*)'];
        }
        if(@$sl == 0) {
            echo '<script language="javascript">';
            echo 'alert("Không tìm thấy")';
            echo '</script>';
        }

        if ($sl > 0) {
            $query = mysqli_query($conn, 'SELECT *, COUNT(*) FROM `congviec` WHERE `TENCONGTY` LIKE "%' . @$_POST['timkiemtheotext'] . '%" OR `YEUCAUCONGVIEC` LIKE "%' . @$_POST['timkiemtheotext'] . '%"OR `DIACHI` LIKE "%' . @$_POST['timkiemtheotext'] . '%"OR `VUNGMIEN` LIKE "%' . @$_POST['timkiemtheotext'] . '%"OR `MOTACONGVIEC` LIKE "%' . @$_POST['timkiemtheotext'] . '%"');
            while ($row = mysqli_fetch_assoc($query)) {
                
                echo '
<table id="wrap">
   	
<tr class="left">
        <th class="yeucaucongviec"><a href="#">' . $row['YEUCAUCONGVIEC'] . '</a></th>
		<th class="tencongty"><a href="#">' . $row['TENCONGTY'] . '</a></th>  
        <th class="luong"><a href="#">$ Lương: ' . $row['Luong'] . '</a></th>
		<th class="vungmien"><a href="#">🌍 Vùng Miền: ' . $row['VUNGMIEN'] . '</a></th>
        <th class="diachi"><a href="#">🏬 Địa chỉ: ' . $row['DIACHI'] . '</a></th>
</tr>
<tr class="right">

        <th class="ngaydang"><a href="#">🕑 Ngày đăng :' . $row['NGAYDANG'] . '</a></th>
		<th class="chedodaingo"><a href="#">Đãi ngộ: ' . $row['CHEDODAINGO'] . '</a></th>
		<th class="motacongviec"><a href="#">Mô tả :' . $row['MOTACONGVIEC'] . '</a></th>
</tr>


		</table>
';
            }
        }
    }
    
    
        ?>
        
  	 </article>
          

		</section>
		
  
  <?php include 'inc/footer.php'; ?>
  





</form>