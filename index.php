<?php include 'inc/header.php'; ?>
<?php include 'config/database.php'; ?>

</style>
<form action="" method="post" name="main-form">
	<div id="menu_top">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class=" navbar-collapse">
				<ul class="navbar-nav ">
					<li class="nav-item active "><aclass="nav-link active navbar-brand" href="index.html">Home</a></li>
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
             <?php
             
             if (@$_POST['timkiemtheotext'] == "") {
                 $query = mysqli_query($conn, "select COUNT(*) FROM `congviec` ");
                 if ($row = mysqli_fetch_assoc($query)) {
                     echo $row['COUNT(*)'] . " " . "việc làm";
                 }
             ?>
			<article id="slvl">
<!--<table style="width:100%; height:250px; color:white; font-size:15px;color:black;     ">
		<tr style=" background:#65bc7b;border-bottom:1px solid black">
		
		<th class="md">Yêu cầu công việc</th>
		<th class="ch"> Tên công ty</th>
		<th>Lương</th>
		<th>Vùng miền</th>
		<th>Địa chỉ</th>
		<th>Ngày đăng</th>
		<th>Chế độ đãi ngộ</th>
            <th>Mô tả công việc</th>
		
		</tr>
		
   <table style="width:100%; height:250px; color:white; font-size:15px;color:black;   >   ">
		<tr style=" background:#65bc7b;border-bottom:1px solid black">
		
		<th class="md">Họ và tên</th>
		<th class="ch"> Hình thức làm việc</th>
		<th>Ngành nghề</th>
		<th>Địa chỉ</th>
		<th>Số năm kinh nghiệm</th>
		<th>Bằng cấp</th>
		<th>Tin học</th>
            <th>Ngoại ngữ</th>
		
		</tr>-->
    		
    	
   
    
  
 
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
            echo '
	
   <table style="width:100%; height:250px; color:white; font-size:15px;color:black;text-align:center; ">
		<tr style=" background:#65bc7b;border-bottom:1px solid black">
		
		<th class="md">Họ và tên</th>
		<th class="ch"> Hình thức làm việc</th>
		<th>Ngành nghề</th>
		<th>Địa chỉ</th>
		<th>Số năm kinh nghiệm</th>
		<th>Bằng cấp</th>
		<th>Tin học</th>
            <th>Ngoại ngữ1</th>
		
		</tr>';
            while ($row = mysqli_fetch_assoc($query)) {
                echo '
	

						    
<tr style=";border-bottom:1px solid black">
        <th class="yeucaucongviec">' . $row['HOVATEN'] . '</th>
		<th class="tencongty"> ' . $row['HINHTHUCLAMVIEC'] . '</th>
        <th class="luong">' . $row['NGANHNGHE'] . '</th>
		<th class="vungmien"> ' . $row['DIACHI'] . '</th>
        <th class="diachi"> ' . $row['SONAMKINHNGIEM'] . '</th>

    
        <th class="ngaydang">' . $row['BANGCAP'] . '</th>
		<th class="chedodaingo">' . $row['TINHOC'] . '</th>
		<th class="motacongviec">' . $row['NGOAINGU'] . '</th>
</tr>
            
            
		
';
            }
        }        // End tìm người ứng tuyển
        
        elseif (@$_POST['timkiem'] == "search" && @$_POST['location'] == "whole" && @$_POST['object'] == "which" || @$_POST['location'] == "") {
            $query = mysqli_query($conn, "select * FROM `congviec`");
			  echo '
<table style="width:100%; height:250px; color:white; font-size:15px;color:black;text-align:center;">
		<tr style=" background:#65bc7b;border-bottom:1px solid black">
		
		<th class="md">Yêu cầu công việc</th>
		<th class="ch"> Tên công ty</th>
		<th>Lương</th>
		<th>Vùng miền</th>
		<th>Địa chỉ</th>
		<th>Ngày đăng</th>
		<th>Chế độ đãi ngộ</th>
            <th>Mô tả công việc</th>
		
		</tr>';
            while ($row = mysqli_fetch_assoc($query)) {
                echo '


<tr style="border-bottom:1px solid black">
        <th class="yeucaucongviec">' . $row['YEUCAUCONGVIEC'] . '</th>
		<th class="tencongty">' . $row['TENCONGTY'] . '</th>  
        <th class="luong"> ' . $row['Luong'] . '</th>
		<th class="vungmien">' . $row['VUNGMIEN'] . '</th>
        <th class="diachi">' . $row['DIACHI'] . '</th>

        <th class="ngaydang">' . $row['NGAYDANG'] . '</th>
		<th class="chedodaingo">' . $row['CHEDODAINGO'] . '</th>
		<th class="motacongviec">' . $row['MOTACONGVIEC'] . '</th>
</tr>


	
';
            }
        }
        
        if ($viec == 1) {
            $query = mysqli_query($conn, 'SELECT * FROM `congviec` WHERE `VUNGMIEN`="' . $mien . '"');
            echo '
<table style="width:100%; height:150px; color:white; font-size:15px;color:black;   >   ">
		<tr style=" background:#65bc7b;border-bottom:1px solid black">
		
		<th class="md">Yêu cầu công việc</th>
		<th class="ch"> Tên công ty</th>
		<th>Lương</th>
		<th>Vùng miền</th>
		<th>Địa chỉ</th>
		<th>Ngày đăng</th>
		<th>Chế độ đãi ngộ</th>
            <th>Mô tả công việc</th>
		
		</tr>';
            while ($row = mysqli_fetch_assoc($query)) {
                echo '
<tr style=" border-bottom:1px solid black">
        <th class="yeucaucongviec">' . $row['YEUCAUCONGVIEC'] . '</th>
		<th class="tencongty">' . $row['TENCONGTY'] . '</th>  
        <th class="luong"> ' . $row['Luong'] . '</th>
		<th class="vungmien">' . $row['VUNGMIEN'] . '</a></th>
        <th class="diachi">' . $row['DIACHI'] . '</th>

        <th class="ngaydang">' . $row['NGAYDANG'] . '</th>
		<th class="chedodaingo">' . $row['CHEDODAINGO'] . '</th>
		<th class="motacongviec">' . $row['MOTACONGVIEC'] . '</th>
</tr>


		
';
            }
        }
        
        if ($nguoi == 1) {
            $query = mysqli_query($conn, 'SELECT * FROM `hosocanhan` WHERE `DIACHI`="' . $mien . '"');
			    echo '

						    	
   <table style="width:100%; height:150px; color:white; font-size:15px;color:black;   text-align:center;  ">
		<tr style=" background:#65bc7b;border-bottom:1px solid black">
		
		<th class="md">Họ và tên</th>
		<th class="ch"> Hình thức làm việc</th>
		<th>Ngành nghề</th>
		<th>Địa chỉ</th>
		<th>Số năm kinh nghiệm</th>
		<th>Bằng cấp</th>
		<th>Tin học</th>
            <th>Ngoại ngữ</th>
		
		</tr>';
            while ($row = mysqli_fetch_assoc($query)) {
                echo '

	
<tr style="border-bottom:1px solid black">
        <th class="yeucaucongviec">' . $row['HOVATEN'] . '</th>
		<th class="tencongty"> ' . $row['HINHTHUCLAMVIEC'] . '</th>
        <th class="luong">' . $row['NGANHNGHE'] . '</th>
		<th class="vungmien"> ' . $row['DIACHI'] . '</th>
        <th class="diachi"> ' . $row['SONAMKINHNGIEM'] . '</th>

    
        <th class="ngaydang">' . $row['BANGCAP'] . '</th>
		<th class="chedodaingo"> ' . $row['TINHOC'] . '</th>
		<th class="motacongviec">' . $row['NGOAINGU'] . '</th>
</tr>
            
            
	
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
            echo '

						    	
   <table style="width:100%; height:150px; color:white; font-size:15px;color:black;   text-align:center; ">
		<tr style=" background:#65bc7b;border-bottom:1px solid black">
		
		<th class="md">Họ và tên</th>
		<th class="ch"> Hình thức làm việc</th>
		<th>Ngành nghề</th>
		<th>Địa chỉ</th>
		<th>Số năm kinh nghiệm</th>
		<th>Bằng cấp</th>
		<th>Tin học</th>
            <th>Ngoại ngữ</th>
		
		</tr>';
			while ($row = mysqli_fetch_assoc($query)) {
                
                echo '

<tr style=" border-bottom:1px solid black">
        <th class="yeucaucongviec">' . $row['YEUCAUCONGVIEC'] . '</th>
		<th class="tencongty"' . $row['TENCONGTY'] . '</th>  
        <th class="luong"> ' . $row['Luong'] . '</th>
		<th class="vungmien">' . $row['VUNGMIEN'] . '</th>
        <th class="diachi">' . $row['DIACHI'] . '</th>

        <th class="ngaydang">' . $row['NGAYDANG'] . '</th>
		<th class="chedodaingo">' . $row['CHEDODAINGO'] . '</th>
		<th class="motacongviec">' . $row['MOTACONGVIEC'] . '</th>
</tr>


	
';
            }
        }
    }
    
    
        ?>
        	</table>
  	 </article>
          

		</section>
		
  
  <?php include 'inc/footer.php'; ?>
  





</form>