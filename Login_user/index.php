<?php
session_start();
include_once '../function/dbconnect.php';
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pdo = connect_db();
    $query = $pdo->prepare("SELECT * FROM `users_tbl` WHERE username ='$username'");
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    if ($res){
        if ($res->password == $password){
            header("location:http://localhost/asamooz/panel/front-panel/dashboard.php");
            $_SESSION['login_user']=$username;
            if($_POST['submit']){
                setcookie('username', $username, time() + (86400 * 30));
                setcookie('password', $password, time() + (86400 * 30));
            }

                echo 'ورود شما موفقیت آمیز بود';
        }

        else{
            echo "<pre>کاربرگرامی:
رمز عبور اشتباه است</pre>";
        }
    }
    else{
        echo "کاربر گرامی رمز عبور اشتباه است مجددا تلاش نمایید ";
    }
}
?>

<!DOCTYPE html>
<html lang="fa_IR">
<head>
	<title>پنل کاربری سامانه آساموز</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-logo" style="border-image: url('images/bg-02.png');">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27" style="font-family: IRANSansWeb; font-size: 90%; color: #212529;">
						سامانه آموزشی آساموز | جامع متمرکز
					</span>

					<div class="wrap-input100 validate-input" data-validate = "نام کاربری مورد نیاز است">
						<input class="input100" type="text" name="username" placeholder="نام کاربری"  style="font-family: IRANSansWeb; color:#212529 " value="<?php if (isset($_COOKIE['username'])){ echo $_COOKIE['username'];}?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
						<input class="input100" type="password" name="password" placeholder="رمز عبور"  style="font-family: IRANSansWeb; color: #212529" value="<?php if (isset($_COOKIE['password'])){ echo $_COOKIE['password'];}?>">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" value="">
						<label class="label-checkbox100" for="ckb1"  style="font-family: IRANSansWeb;color: #212529">
							مرا به خاطر بسپار
						</label>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="ورود به سامانه"  style="font-family: IRANSansWeb;color: white;background: violet;">


					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#"  style="font-family: IRANSansWeb;color: #212529">
							بازیابی رمز عبور
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>