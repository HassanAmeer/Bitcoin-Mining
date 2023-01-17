

<?php

include '../../config.php';
session_start();
// error_reporting(0);

$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);
$admnmail = $vstng['email'];
///////////////

if(isset($_POST['getlink'])) 
{
 $mailto = $_POST['inputemail'];  
 $subject = 'For Code Recovery'; 
 $rdmcode = rand(10,8888880);
 $formsg = $_SERVER['HTTP_HOST'].'/en/password/reset.php?forresetid='.$rdmcode;
 $message = $formsg;
 echo $headers = "From: " . $admnmail;
 
  $result1 = mail($mailto, $subject, $message, $headers); 
  if ($result1)
  { 
    $_SESSION['thismail'] = $mailto;
    $_SESSION['sescode'] = $rdmcode;
    
  echo '<div id="successrs" class="alert alert-success notifycross" style="display:none;color:green;border-radius:5px; border-right:15px solid green;background:rgba(189,255,189,0.861);font-size:1.5em; box-shadow:1px 1px 10px green;" role="alert"> Email is sent To You Please check it or in spam and open link in One Minutes to reset.
    </div>';
  }
}

/////////////////// for this mail
 $thismail =$_SESSION['thismail'];
///////// for resetcodebtn ///////
if(isset($_POST['resetcodebtn']))
{
  $setpass = mysqli_real_escape_string($db,$_POST['pmwtblidj']);
  $resetpasq = "UPDATE userslog SET upass='$setpass' WHERE uemail=$thismail";
 $resetpasok = mysqli_query($db,$resetpasq);
  if($resetpasok)
  {
   echo '<div id="successrs" class="alert alert-success notifycross" style="color:green;border-radius:5px; border-right:15px solid green;background:rgba(189,255,189,0.861);font-size:1.5em; box-shadow:1px 1px 10px green;" role="alert"> Successfully Password Reset
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
<link rel="shortcut icon" href="../../dev/img/fav.svg" type="image/x-icon">
<link href="../../dev/css/main.min.css" rel="stylesheet">
</head>
<body>
<div class="authPage-bg">
<header class="header-content">
<div class="logo">
<a href="../../index.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li><a href="../about.php">About</a></li>
<li><a href="../package.php">Investment packages</a></li>
<li><a href="../equipment.php">Equipment</a></li>
<li><a href="../referral.php">Referral program</a></li>
<li><a href="../faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang en">
en
<ul>
<li>
<a href="../../ru/password/reset.php" class="ru">ru</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="../login.php">Log In</a>
<a class="sign" href="../register.php">Get Started</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<section class="authPage-body">
<div class="authPage-content">
  
<? if(isset($_GET['forresetid']) && $_GET['forresetid'] == $_SESSION['sescode'])
{ ?>
  
<form method="POST" action="">
<div class="authTitle-page">
<h3>Update Password?</h3>
<p>Enter New Password Thats remembered and go to login page to login Successfully</p>
</div>
<div class="authForm-content">
<div class="authForm-field">
<label>New Password</label>
<input type="password" value="" name="setpass" required autofocus>
</div>
<div class="authForm-link">
<a href="../login.php">I remembered my password, go back</a>
</div>
<button name="resetcodebtn" type="submit">
<span> Reset Password</span>
</button>
</div>
</form>
  
  
  
  
<? }else{ ?>

<form method="POST" action="">
<div class="authTitle-page">
<h3>Forgot Password?</h3>
<p>Enter your email address and get verification link to reset your password</p>
</div>
<div class="authForm-content">
<div class="authForm-field">
<label>Your email</label>
<input type="email" value="" name="inputemail" required autofocus>
</div>
<div class="authForm-link">
<a href="../login.php">I remembered my password, go back</a>
</div>
<button name="getlink" type="submit">
<span>Get Link</span>
</button>
</div>
</form>
<? } ?>






</div>
</section>
</div>
<div class="footer-bg">
<footer class="footer-content">
<div class="scroll-top"></div>
<section class="section1">
<div class="logo">
<a href="../../index.php"></a>
</div>
<nav class="navFooter-content">
<ul>
<li><a href="../about.php">About</a></li>
<li><a href="../package.php">Investment packages</a></li>
<li><a href="../equipment.php">Equipment</a></li>
<li><a href="../referral.php">Referral program</a></li>
<li><a href="../faq.php">FAQ</a></li> </ul>
</nav>
<div class="auth-footer">
<a href="../login.php">Log In</a>
<a class="sign" href="../register.php">Get Started</a>
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
<a href="../privacy-policy.php">Privacy policy</a>
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
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../dev/js/jquery.min.js"></script>
<script src="../../dev/js/jquery.cookie.js"></script>
<script src="../../dev/js/common.min.js"></script>
</body>

</html>