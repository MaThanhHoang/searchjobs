<?php include 'inc/header.php'; ?>
<head>
    <link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
</head>

<div class="main-w3layouts wrapper">
    <h1>Ã„ï¿½Ã„Æ’ng kÃƒÂ­ tÃƒÂ i khoÃ¡ÂºÂ£n</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="#" method="post">
                <input class="text" type="text" name="Username" placeholder="Username" required="" />
                <input class="text email" type="email" name="email" placeholder="Email" required="" />
                <input class="text" type="password" name="password" placeholder="Password" required="" />
                <input class="text w3lpass" type="password" name="confirmpassword" placeholder="Confirm Password" required="" />
             
                <input type="submit" class="btn btn-primary"
						value="Đăng kí" name="timkiem">
                <meta charset="utf8" />
                <?php
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                //connect database
                 $kn = mysqli_connect("localhost","root","","a") or die("thất b");
                mysqli_select_db($kn, "a");
                mysqli_query($kn,"SET NAMES 'utf8'");
                //post
                $username = @$_POST['Username'];
                $email = @$_POST['email'];
                $password = @$_POST['password'];
                $confirmoassword = @$_POST['confirmpassword'];

                if(isset($_POST['timkiem']) =="Đăng kí" && $password == $confirmoassword){
                    $insert = "INSERT INTO taikhoan VALUES ('acs', '".$username."','".$email."','".$password."')";
                    $insert2 = "INSERT INTO taikhoan VALUES ('22','3','4','5')";
                    mysqli_query($kn,$insert);
                    mysqli_query($kn,$insert2);
                    echo "đăng kí thành công";
                   // header('Location: http://localhost:81/searchjobs/');
                }
                else{
                    echo"MÃ¡ÂºÂ­t khÃ¡ÂºÂ©u khÃƒÂ´ng khÃ¡Â»â€ºp!";
                }
                ?>
            </form>
            <p>
                BÃ¡ÂºÂ¡n Ã„â€˜ÃƒÂ£ cÃƒÂ³ tÃƒÂ i khoÃ¡ÂºÂ£n?
                <a href="login.php"> Ã„ï¿½Ã„Æ’ng nhÃ¡ÂºÂ­p</a>
            </p>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
