
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
<div class="eqPage-bg">
<header class="header-content">
<div class="logo">
<a href="../index.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li><a href="about.php">About</a></li>
<li><a href="package.php">Investment packages</a></li>
<li class="active"><a href="equipment.php">Equipment</a></li>
<li><a href="referral.php">Referral program</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang en">
en
<ul>
<li>
<a href="../ru/equipment.php" class="ru">ru</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Log In</a>
<a class="sign" href="register.php">Get Started</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="eqPage-titleBody">
<div class="eqPage-title">
<h1>Mining equipment</h1>
<p>GreenHashes provides an all-in-one staking solution. Let us do the work, while you earn the rewards.</p>
</div>
</div>
</div>
<section class="eq-infoContent">
<section class="eq-info">
<div class="item img1"></div>
<div class="item">
<h2>Asic Whatsminer M20S 70TH/s</h2>
<p>MicroBT has released ASIC Whatsminer M20s 70 TH / s for Bitcoin mining on the SHA-256 algorithm.</p>
<p>ASIC Whatsminer M20s 70 TH / s is made of high quality aluminum, so the structure of the device is reliably protected from mechanical damage. On the sides there are special coolers in the amount of 2 pieces, which provide effective cooling, protecting the ASIC from overheating.</p>
<ul>
<li>Scrypt mining hashrate: 70Th/s </li>
<li>Power consumption: 3360W</li>
<li>Hashing algorithm: SHA256</li>
<li>Chip name: TSMC</li>
<li>Power efficiency: 67 J/GHs</li>
<li>Rated voltage: 12V</li>
<li>Noise level: 75db</li>
</ul>
</div>
</section>
<section class="eq-info">
<div class="item img2"></div>
<div class="item">
<h2>Miner ASIC Antminer S15</h2>
<p>The antminer S9 with 16nm chips, which held the lead for almost two years, was replaced by a new model - the asic Bitmain Antminer S15.</p>
<p>Power consumption is comparatively economical, and the case uses a lightweight but durable aluminum alloy to help speed up cooling.</p>
<ul>
<li>Scrypt mining hashrate: 28 Th/s</li>
<li>Power consumption: 1600W</li>
<li>Hashing algorithm: SHA256</li>
<li>Chip name: BM1391</li>
<li>Power efficiency: 57 J/GHs</li>
<li>Noise level: 80db</li>
</ul>
</div>
</section>
</section>
<section class="eq-info-lg">
 <div class="item">
<div class="box">
<h3>Consistency</h3>
<p>The company has taken care of the systematization of the functions for activating packages and payments.</p>
</div>
<div class="box">
<h3>Regularity</h3>
<p>Regularity and automation of payments are provided for quick profit without problems.</p>
</div>
<div class="box">
<h3>Reliability</h3>
<p>The company is responsible for the security of this server and provides mining, which ensures a greater degree of confidentiality.</p>
</div>
</div>
<div class="item">
<div class="box">
<h3>Innovation</h3>
<p>We have managed to open access to eco-mining for everyone.</p>
</div>
<div class="box">
<h3>Functionality</h3>
<p>Thanks to the functionality of the server, buying, withdrawing and tracking your balance are not difficult for our clients.</p>
</div>
<div class="box">
<h3>Individuality</h3>
<p>Our support team tries to individually approach each client, taking into account your wishes, we try to implement this as soon as possible for further use.</p>
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
<li class="active"><a href="equipment.php">Equipment</a></li>
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