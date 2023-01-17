

<?php

include '../config.php';
session_start();
// error_reporting(0);

if(isset($_SESSION['loginses']))
{ header('location:dashboard.php'); }

$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);


///////////////
if(isset($_POST['loginbtn']))
{
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  
$upasssha1 = sha1($password);
$upassmd = md5($upasssha1);
  
 $chklog = mysqli_query($db,"SELECT uemail, upass FROM `userslog` WHERE uemail='$email' AND upass='$upassmd'");
if(mysqli_num_rows($chklog) == 1)
  { 
   $_SESSION['loginses'] = $email;
    header('location:dashboard.php');
 $ipset = $_SERVER['REMOTE_ADDR'];
 $ipchangeset = "UPDATE `userslog` SET `ip`='$ipset' WHERE uemail='$email'";
  mysqli_query($db,$ipchangeset);
  }else{
    echo '<div id="errors" class="alert notifycross" style="background:rgba(253,176,176,0.796); color:red; border-radius:5px; border-left:15px solid red;font-size:1.5em;box-shadow:1px 1px 10px red;" role="alert">
   Login Account Data Incorrect
   </div>';
  }
}











?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>greenhashes</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<link rel="shortcut icon" href="../dev/img/fav.svg" type="image/x-icon">
<link href="../dev/css/main.min.css" rel="stylesheet">
</head>
<body>
<div class="authPage-bg">
<header class="header-content">
<div class="logo">
<a href="../index.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li><a href="about.php">About</a></li>
<li><a href="package.php">Investment packages</a></li>
<li><a href="equipment.php">Equipment</a></li>
<li><a href="referral.php">Referral program</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang en">
en
<ul>
<li>
<a href="../ru/login.php" class="ru">ru</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Log In</a>
<a class="sign" href="register.php">Get Started</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<section class="authPage-body">
<div class="authPage-content">
<form method="POST" action="">
<div class="authLink-page">
<a class="active" href="login.php">Login</a>
<a href="register.php">Sign Up</a>
</div>
<div class="authForm-content">
<div class="authForm-field">
<label>Your email</label>
<input type="email" value="" name="email" required autofocus>
</div>
<div class="authForm-field">
<label>Password</label>
<input type="password" name="password">
</div>
<div class="authForm-link">
<a href="password/reset.php">Forgot your password?</a>
</div>
<button name="loginbtn" type="submit">
<span>Login</span>
</button>
</div>
</form>
</div>
</section>
</div>
<div class="footer-bg">
<footer class="footer-content">
<div class="scroll-top"></div>
<section class="section1">
<div class="logo">
<a href="../index.php"></a>
</div>
<nav class="navFooter-content">
<ul>
<li><a href="about.php">About</a></li>
<li><a href="package.php">Investment packages</a></li>
<li><a href="equipment.php">Equipment</a></li>
<li><a href="referral.php">Referral program</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="auth-footer">
<a href="login.php">Log In</a>
<a class="sign" href="register.php">Get Started</a>
</div>
</section>
<section class="section2">
<div class="s-block">
<div class="link-soc">
<a class="ico02" href="<? echo $vstng['instalink']; ?>" target="_blank"></a>
<a class="ico03" href="<? echo $vstng['tglink']; ?>" target="_blank"></a>
<a class="ico04" href="<? echo $vstng['fblink']; ?>" target="_blank"></a>
<a class="ico05" href="<? echo $vstng['twlink']; ?>" target="_blank"></a>
</div>
<div class="copy">
Copyright © 2022
<a href="privacy-policy.php">Privacy policy</a>
</div>
</div>
<div class="s-block">
<a href="mailto:<? echo $vstng['email']; ?>?subject=Greenhashes"><span class="__cf_email__" data-cfemail="">support@mail</span></a>
<p>If you have any questions about the service or have suggestions, write to us</p>
</div>
<div class="s-block">
<a href="<? echo $vstng['twlink']; ?>" target="_blank">Telegram Greenhashes</a>
<p>Join our telegram channel there is a lot of useful information on investments</p>
</div>
</section>
</footer>
<span></span>
</div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../dev/js/jquery.min.js"></script>
<script src="../dev/js/jquery.cookie.js"></script>
<script src="../dev/js/common.min.js"></script>
</body>

</html>