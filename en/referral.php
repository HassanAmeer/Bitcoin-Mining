

<?php

include '../config.php';
session_start();
// error_reporting(0);

$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);


///////////////






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
<div class="referralPage-bg">
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
<a href="../ru/referral.php" class="ru">ru</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Log In</a>
<a class="sign" href="register.php">Get Started</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="referralPage-titleBody">
<div class="referralPage-title">
<h1>Referral Program GreenHashes</h1>
<p>GreenHashes provides an all-in-one staking solution. Let us do the work, while you earn the rewards.</p>
</div>
</div>
</div>
<section class="referralPage-steps">
<div class="item">
<h2>easy steps to start mining cryptocurrency</h2>
</div>
<div class="item">
<div class="step-item">
<div class="info step01">
<h4>Register and purchase the package</h4>
<p>Fill out the registration form and choose the mining package that suits you.</p>
</div>
</div>
<div class="step-item">
<div class="info step02">
<h4>Share your referral link</h4>
<p>Your friend should register using your referral link. By clicking on the link, fill out the registration form.</p>
</div>
</div>
<div class="step-item">
<div class="info step03">
<h4>Recommend a package to a friend</h4>
<p>The presence of your friend&#039;s purchased package gives you a nice bonus immediately after activating the package.</p>
</div>
</div>
<div class="step-item">
<div class="info step04">
<h4>Get your bonus</h4>
<p>Now you have the bonus. And you and your friend can increase the bonus by purchasing new packages.</p>
</div>
</div>
</div>
</section>
<section class="referralPage-about">
<div class="info">
<h2>About the referral program</h2>
<p>This Referral Program was created to share useful information with a friend.</p>
<p>Having your own account, you can send your referral link with a special number to your friend. Who by clicking on the link can view and register on the same platform. Then you will be able to shop together and increase the level of the referral program and thereby increase your profits.</p>
</div>
<div class="stat">
 <div class="item">
<p>Total referrals</p>
<span>2300+</span>
</div>
<div class="item">
<p>Total dividends</p>
<span>$120 200</span>
</div>
</div>
</section>
<section class="fastStart-body">
<div class="fastStart-title">
<h3>Try mining with GreenHashes today and get your first profit within 24 hours</h3>
</div>
<div class="fastStart-form">
<form action="register.php" method="post">
<div class="form-content">
<input type="email" name="start_email" placeholder="Enter e-mail">
<button type="submit"><span>Get Started</span></button>
</div>
</form>
</div>
</section>
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