<meta charset="utf8">
<?php include 'inc/header.php'; ?>
<head>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link href="css/createCV.css" rel="stylesheet" type="text/css" media="all" />
</head>
<div class="menu-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav ">
            <li class="nav-item active ">
                <a class="nav-link active navbar-brand" href="index.php#">Home</a>
            </li>
            <li class="nav-item active " >
                <a class="nav-link active navbar-brand" href="createCV.php">Tạo CV</a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link active navbar-brand" href="createjob.php">Đăng tin tuyển dụng </a>
            </li>
        </ul>
    </nav>
</div>
<div class="container">
<?php
$sdttrang = 15; //So Dong Trang
if(isset($_GET['trang']))
{
$page = $_GET['trang'];
}
else{
$page = 0;
}

$kn= mysqli_connect("localhost","root","","searchjobs"); //Ket Noi CSDL
mysqli_query($kn,"SET NAMES 'utf8'");
$lenhdem = "select * from hosocanhan"; 
$kqdd = mysqli_query($kn,$lenhdem) or die ("khong thuc hien duoc lenh sql");
$sodong = mysqli_num_rows($kqdd);

$sotrangdl = $sodong / $sdttrang;
$vtbd = $page * $sdttrang;
//Phan Trang
$lenhpt = "select * from hosocanhan LIMIT {$vtbd},{$sdttrang}";
$kqpt = mysqli_query($kn,$lenhpt);
echo "<table border='1' align='center'>";
$stt=0;
echo "<tr> <td>STT</td> <td>Tên Người Dùng</td> <td>Địa Chỉ</td> <td>NGày Sinh</td> <td>Ngành Nghề</td> <td>Điểm mạnh công việc</td> <td>Hình thức làm việc</td> <td>Số năm kinh nghiệm</td> <td>Bằng cấp</td> <td>Tin Học</td> <td>Tiếng anh</td> <td>Tiếng Nhật</td> <td>Tiếng khác</td> <td>Năng khiếu</td> </tr>";
while ($dong = mysqli_fetch_array($kqpt)) {
$stt = $stt+1;
echo "<tr> <td>".$stt."</td> <td> ".$dong['HOVATEN']."</td> <td>".$dong['DIACHI']."</td> <td>".$dong['NGAYSINH']."</td> <td>".$dong['NGANHNGHE']."</td>
<td>".$dong['DIEMMANHCONGVIEC']."</td>
<td>".$dong['HINHTHUCLAMVIEC']."</td>
<td>".$dong['SONAMKINHNGIEM']."</td>
<td>".$dong['BANGCAP']."</td>
<td>".$dong['TINHOC']."</td>
<td>".$dong['TIENGANH']."</td>
<td>".$dong['TIENGNHAT']."</td>
<td>".$dong['TIENGKHAC']."</td>
<td>".$dong['NANGKHIEU']."</td>
</tr>";
}
echo "</table>";
for($i = 0 ; $i <= $sotrangdl ; $i++)
{
echo "<a href='phantrang.php?trang=$i'>>$i</a>";
}
?>
</div>
<?php include 'inc/footer.php'; ?>