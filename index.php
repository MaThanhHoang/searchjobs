<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>TUYá»‚N Dá»¤NG ONLINE</title>
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
.yeucaucongviec{
	font-size: 25px;
	color: red;
	text-align: top;
	width: 60%;
	margin-top: 5%;
	float: left;
}
.tencongty{
	font-size: 15px;
	color: #5e687b;
	text-align: top;
	width: 60%;
	margin-top: 0%;
	float: left;
}
.luong{
	font-size: 15px;
	color: green;
	text-align: top;
	width: 60%;
	margin-top: 0%;
	float: left;
}

.vungmien{
	font-size: 15px;
	color: green;
	text-align: top;
	width: 60%;
	margin-top: 0%;
	float: left;
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
          <a class="nav-link active" aria-current="page" href="login.php"><span>Ã„ï¿½Ã„Æ’ng nhÃ¡ÂºÂ­p</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register.php" tabindex="-1" aria-disabled="true">
            Ã„ï¿½Ã„Æ’ng kÃƒÂ½
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="container">
  <div class="panner">
    <div class="background-input">
      <p> TÃƒÂ¬m kiÃ¡ÂºÂ¿m cÃƒÂ´ng viÃ¡Â»â€¡c</p>
      <div class="input-group">
        <input type="text" placeholder="NhÃ¡ÂºÂ­p tÃƒÂªn cÃƒÂ´ng ty,tÃƒÂªn cÃƒÂ´ng viÃ¡Â»â€¡c, kÃ¡Â»Â¹ nÃ„Æ’ng . . . ." />
        <select name="object">
          <option value="which" selected="selected">TÃƒÂ¬m viÃ¡Â»â€¡c</option>
          <option value="who">TÃƒÂ¬m Ã¡Â»Â©ng viÃƒÂªn</option>
        </select>
        <select name="location">
          <option value="bac" selected="selected">MiÃ¡Â»ï¿½n BÃ¡ÂºÂ¯c</option>
          <option value="trung">MiÃ¡Â»ï¿½n Trung</option>
          <option value="nam">MiÃ¡Â»ï¿½n Nam</option>
        </select>
        <button type="button" class="btn btn-primary">Search</button>
      </div>
    </div>
    <button type="button" class="btn btn-primary" style="margin-left: 300px ">TÃ¡ÂºÂ¡o CV</button>
    <button type="button" class="btn btn-primary btn-second" style="background-color: #d22d65">Ã„ï¿½Ã„Æ’ng tin tuyÃ¡Â»Æ’n dÃ¡Â»Â¥ng</button>
  </div>
  <h1> ViÃ¡Â»â€¡c lÃƒÂ m tuyÃ¡Â»Æ’n gÃ¡ÂºÂ¥p</h1>
  
  
   <br>
  <br>
  <section>
  	<article >
  	

  		
  		
  <?php
		$conn = mysqli_connect('localhost', 'root', '', 'a'); //máº­u ngá»« coi database lÃ  cÃ¡i giá»� mn Ä‘Ã¡p dÃ´ chá»¯ a nhÃ¡
		mysqli_set_charset($conn, 'UTF8');
		if (! $conn) {
		    die('notconnect' . mysqli_error());
		}
		$query = mysqli_query($conn, "select * FROM `congviec`");
		while ($row = mysqli_fetch_assoc($query))
		{
		    echo '
<table id="wrap">
		<tr>
    
<th class="yeucaucongviec">'.$row['YEUCAUCONGVIEC'].'</th>
		<th class="tencongty">'.$row['TENCONGTY'].'</th>
<th class="luong">$ Lương: '.$row['Luong'].'</th>
		<th class="vungmien"> ☢: '.$row['VUNGMIEN'].'</th>
		<th class="chedodaingo">'.$row['CHEDODAINGO'].'</th>
		<th class="ngaydang">'.$row['NGAYDANG'].'</th>
		
		<th class="motacongviec">'.$row['MOTACONGVIEC'].'</th>

</tr>
		</table>
'
		    
		    ;
		}
  		
		?>

  	</article>
  </section>
  

  <?php include 'inc/footer.php'; ?>
