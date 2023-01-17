
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
<title>GreenHashes</title>
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
<div class="aboutPage-bg">
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
<a href="../ru/about.php" class="ru">ru</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Log In</a>
<a class="sign" href="register.php">Get Started</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="aboutPage-titleBody">
<div class="aboutPage-title">
<h1>About GreenHashes</h1>
<p>Green Hashes opens access to eco-mining for everyone</p>
</div>
</div>
</div>
<section class="advantages-body">
<div class="content-box">
<h2><span>Services</span> That We Continue To Improve</h2>
</div>
<div class="content-box">
<div class="item">
<div class="info ico01">
<h3>Security and privacy</h3>
<p>We present a mining service that provides a high degree of confidentiality. In this regard, we keep the collection of user data to a minimum and are responsible for the security of this server.</p>
</div>
</div>
<div class="item">
<div class="info ico02">
<h3>Eco-friendly product</h3>
<p>For the platform we offer, we have acquired high-quality and environmentally friendly equipment for the efficiency of the mining system.</p>
</div>
</div>
<div class="item">
<div class="info ico03">
<h3>Instant payouts</h3>
<p>The income from your mining is accrued daily using an automatic payout system.</p>
</div>
</div>
<div class="item">
<div class="info ico04">
<h3>Stable income</h3>
<p>The presence of regular payments, a variety of mining packages and an easy-to-use interface provide you with a stable and passive income.</p>
</div>
</div>
</div>
</section>
<section class="pageAbout-body">
<div class="info">
<div class="txt">
<h2>Cloud <span>Mining</span></h2>
<p>We provide mining services that use only renewable energy. The platform is intended for both beginners and professionals in the field of cryptocurrency.</p>
<p>When using our service, our users get the opportunity to control their profits around the clock, and the company at that time takes care of all the concerns to ensure safety and smooth operation.</p>
<a href="package.php">Get Started</a>
</div>
</div>
</section>
<section class="aboutPage-workInfo">
<div class="title">
<h2>Here’s how it works</h2>
</div>
<div class="contentItem">
<div class="item ico01">
<h3>Create an account</h3>
<p>Join our community by filling out the registration form.</p>
</div>
<div class="item ico02">
<h3>Check out our packages</h3>
<p>Check out our services. Each package has its own advantage.</p>
</div>
<div class="item ico03">
<h3>Get stable profits</h3>
<p>Within 24 hours, get your first profit after activating your chosen package.</p>
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
<li class="active"><a href="about.php">About</a></li>
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