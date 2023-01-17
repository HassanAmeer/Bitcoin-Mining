
<?php
include '../config.php';
session_start();
 error_reporting(0);

$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);


///////////////
////////////// start signup
if(isset($_SESSION['refbyses']))
{ $refbyses = $_SESSION['refbyses']; }
else{ $refbyses = ""; }
///////////////




if(isset($_POST['signupbtn']))
{
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  
  $chklog = mysqli_query($db,"SELECT uemail FROM `userslog` WHERE uemail='$email'");
 $chklogv=mysqli_fetch_array($chklog);
 $chkbylog = $chklogv['uemail'];

if($chkbylog == $email){
  echo '<div id="errors" class="alert notifycross" style="background:rgba(253,176,176,0.796); color:red; border-radius:5px; border-left:15px solid red;font-size:1.5em;box-shadow:1px 1px 10px red;" role="alert">
    This Email Already Registered
   </div>';
}else{
   $upasssha1 = sha1($password);
   $upassmd = md5($upasssha1);
  $setlog = "INSERT INTO `userslog`(`uemail`, `upass`, `refby`) VALUES ('$email','$upassmd','$refbyses')";
  
  $setlogq = mysqli_query($db,$setlog); 
  if($setlogq){ echo '<div id="successrs" class="alert alert-success notifycross" style="color:green;border-radius:5px; border-right:15px solid green;background:rgba(189,255,189,0.861);font-size:1.5em; box-shadow:1px 1px 10px green;" role="alert"> Successfully registered Can Login
    </div>';
   if($refbyses !=""){
   $setotlref = "UPDATE `userslog` SET `totalref`=totalref+1 WHERE uid='$refbyses'";
   mysqli_query($db,$setotlref); }
    
    } 
  }
}

/////////////// end signup
///////////////
///////////////



?>

<!DOCTYPE html>
<html lang="ru">

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
<a href="../ru.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li><a href="about.php">О нас</a></li>
<li><a href="package.php">Инвестиционные пакеты</a></li>
<li><a href="equipment.php">Оборудование</a></li>
<li><a href="referral.php">Реферальная Программа</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang ru">
ru
<ul>
<li>
<a href="../en/register.php" class="en">en</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Войти</a>
<a class="sign" href="register.php">Регистрация</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<section class="authPage-body">
<div class="authPage-content">
<form method="POST" autocomplete="off" action="">
<div class="authLink-page">
<a class="active" href="register.php">Sign Up</a>
<a href="login.php">Login</a>
</div>
<div class="authForm-content">
<div style="display: none;">
<input id="login-email" type="text" placeholder="Referral ID" name="referrall_ID" value="0">
</div>
<div class="authForm-field">
<label>Your email</label>
<input type="email" placeholder="" name="email" value="" required>
</div>
<div class="authForm-field">
<label>Password</label>
<input type="password" placeholder="" name="password" required>
</div>
<div class="authForm-link">
<a href="login.php">I already have an account</a>
</div>
<div class="authForm-agree">
By clicking "Create an account" you agree to our <a href="terms.php">terms</a> and conditions and <a href="privacy-policy.php">privacy policy</a>
</div>
<button type="submit" name="signupbtn">
<span>Create an account</span>
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
<a href="../ru.php"></a>
</div>
<nav class="navFooter-content">
<ul>
<li><a href="about.php">О нас</a></li>
<li><a href="package.php">Инвестиционные пакеты</a></li>
<li><a href="equipment.php">Оборудование</a></li>
<li><a href="referral.php">Реферальная Программа</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="auth-footer">
<a href="login.php">Войти</a>
<a class="sign" href="register.php">Регистрация</a>
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
<p>Если у вас есть вопросы по услугам или предложения, напишите нам</p>
</div>
<div class="s-block">
<a href="<? echo $vstng['twlink']; ?>" target="_blank">Telegram Greenhashes</a>
<p>Присоединяйтесь к нашему телеграм-каналу, там много полезной информации о инвестициях</p>
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