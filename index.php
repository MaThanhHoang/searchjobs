<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>TUYÃ¡Â»â€šN DÃ¡Â»Â¤NG ONLINE</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style type="text/css">
#wrap{
	font-family: arial, serif ,sans-serif;
	font-variant:normal;
	width: 100%;
	height: 165px;
	border-bottom: 1px solid black;
	border-top: 1px solid black;
	
	
}
.left{
	width: 60%;
	height: inherit;
	float: left;
	
	font-size: 20px;
}
.right{
	width: 40%;
	height: 165px;
	
	
	display: inline;
	float: left;
	color: #60697c;
	font-size: 20px;
	

	
}

.yeucaucongviec{
	font-size: 30px;
	color: red;
	text-align: left;
	width: 100%;
	margin-top: 5%;
	float: left;
	margin-left: 15%;
}
.tencongty{

	color: #5e687b;
	text-align: left;
	width: 100%;
	margin-top: 0%;
	margin-left: 15%;
	float: left;
}
.luong{
	
	color: green;
	text-align: left;
	width: 100%;
	margin-top: 0%;
	float: left;
	margin-left: 15%;

}

.vungmien{
	
	color: green;
	text-align: left;
	width: 100%;
	margin-left: 15%;
	margin-top: 0%;
	float: left;
	
}

.diachi{
	
	color: green;
	text-align: left;
	width: 100%;
	margin-top: 0%;
	margin-left: 15%;
	float: left;
    
}
.right .chedodaingo{
	width:100%;
	float: right;
	text-align: right;
		margin-right: 15%;
	
}

.right .ngaydang{
	margin-top:18%;
	width:100%;
	float: right;
		margin-right: 15%;
		text-align: right;
}
.right .motacongviec
{width:100%;
	
	margin-right: 15%;
	float: right;
	text-align: right;
	
}




#slvl{
	font-weight: bolder;
	font-size: 22px;
	float: right;
}



</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script type="text/javascript" src="js.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yinka Enoch Adedokun">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>



<?php include 'inc/header.php'; ?>
<?php include 'config/database.php'; ?>

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
          <a class="nav-link active" aria-current="page" href="login.php"><span>Ãƒâ€žÃ¯Â¿Â½Ãƒâ€žÃ†â€™ng nhÃƒÂ¡Ã‚ÂºÃ‚Â­p</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register.php" tabindex="-1" aria-disabled="true">
            Ãƒâ€žÃ¯Â¿Â½Ãƒâ€žÃ†â€™ng kÃƒÆ’Ã‚Â½
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="container">
  <div class="panner">
    <div class="background-input">
      <p> TÃƒÆ’Ã‚Â¬m kiÃƒÂ¡Ã‚ÂºÃ‚Â¿m cÃƒÆ’Ã‚Â´ng viÃƒÂ¡Ã‚Â»Ã¢â‚¬Â¡c</p>
      <div class="input-group">
        <input type="text" placeholder="NhÃƒÂ¡Ã‚ÂºÃ‚Â­p tÃƒÆ’Ã‚Âªn cÃƒÆ’Ã‚Â´ng ty,tÃƒÆ’Ã‚Âªn cÃƒÆ’Ã‚Â´ng viÃƒÂ¡Ã‚Â»Ã¢â‚¬Â¡c, kÃƒÂ¡Ã‚Â»Ã‚Â¹ nÃƒâ€žÃ†â€™ng . . . ." />
        <select name="object">
          <option value="which" selected="selected">TÃƒÆ’Ã‚Â¬m viÃƒÂ¡Ã‚Â»Ã¢â‚¬Â¡c</option>
          <option value="who">TÃƒÆ’Ã‚Â¬m ÃƒÂ¡Ã‚Â»Ã‚Â©ng viÃƒÆ’Ã‚Âªn</option>
        </select>
        <select name="location">
          <option value="bac" selected="selected">MiÃƒÂ¡Ã‚Â»Ã¯Â¿Â½n BÃƒÂ¡Ã‚ÂºÃ‚Â¯c</option>
          <option value="trung">MiÃƒÂ¡Ã‚Â»Ã¯Â¿Â½n Trung</option>
          <option value="nam">MiÃƒÂ¡Ã‚Â»Ã¯Â¿Â½n Nam</option>
        </select>
        <button type="button" class="btn btn-primary">Search</button>
      </div>
    </div>
    <button type="button" class="btn btn-primary" style="margin-left: 300px ">TÃƒÂ¡Ã‚ÂºÃ‚Â¡o CV</button>
    <button type="button" class="btn btn-primary btn-second" style="background-color: #d22d65">Ãƒâ€žÃ¯Â¿Â½Ãƒâ€žÃ†â€™ng tin tuyÃƒÂ¡Ã‚Â»Ã†â€™n dÃƒÂ¡Ã‚Â»Ã‚Â¥ng</button>
  </div>
  <h1> ViÃƒÂ¡Ã‚Â»Ã¢â‚¬Â¡c lÃƒÆ’Ã‚Â m tuyÃƒÂ¡Ã‚Â»Ã†â€™n gÃƒÂ¡Ã‚ÂºÃ‚Â¥p</h1>
  
  
   <br>
  <br>
  <section>
    <article id="slvl">
    <?php        $query = mysqli_query($conn, "select COUNT(*) FROM `congviec`");
            if ($row = mysqli_fetch_assoc($query))
            {
                echo  $row['COUNT(*)']." "."việc làm";
            }
    		?>
    		
    	
   
    
    </article>
  	<article >
  
  <?php
	   	
		$query = mysqli_query($conn, "select * FROM `congviec`");
		while ($row = mysqli_fetch_assoc($query))
		{
		    echo '
<table id="wrap">
   	
<tr class="left">
        <th class="yeucaucongviec">'.$row['YEUCAUCONGVIEC'].'</th>
		<th class="tencongty">'.$row['TENCONGTY'].'</th>  
        <th class="luong">$ Lương: '.$row['Luong'].'</th>
		<th class="vungmien">¢ Vùng Miền: '.$row['VUNGMIEN'].'</th>
        <th class="diachi">🌍 Địa chỉ: '.$row['DIACHI'].'</th>
</tr>
<tr class="right">

        <th class="ngaydang">Ngày đăng :'.$row['NGAYDANG'].'</th>
		<th class="chedodaingo">Đãi ngộ: '.$row['CHEDODAINGO'].'</th>
		<th class="motacongviec">Mô tả :'.$row['MOTACONGVIEC'].'</th>
</tr>


		</table>
'
		    
		    ;
		}
  		
		?>

  	</article>
  </section>
  

  <?php include 'inc/footer.php'; ?>
