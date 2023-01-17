


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
<div class="faqPage-bg">
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
<li class="active"><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang en">
en
<ul>
<li>
<a href="../ru/faq.php" class="ru">ru</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Log In</a>
<a class="sign" href="register.php">Get Started</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="faqPage-titleBody">
<div class="faqPage-title">
<h1>FAQ</h1>
<p>Here we have tried to answer frequently asked questions, please read before contacting support.</p>
</div>
</div>
</div>
<section class="faqPage-content">
<div class="info">
<div class="faq-item">
<div class="faq-title">
<h3>1. How to start mining with GreenHashes?</h3>
<span></span>
</div>
<p>First of all, familiarize yourself with the terms of use of our company, go through a simple registration and familiarize yourself with the current packages.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>2. How can I purchase a package?</h3>
<span></span>
</div>
<p>You need to select the package that interests you and follow the instructions on the site, to pay for the packages you will need any virtual wallet. Pay to the wallet address that is indicated on the package you selected.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>3. How to withdraw earned profit?</h3>
<span></span>
</div>
<p>Going to the Payout section, enter your wallet address and the amount you would like to withdraw. The amount should not exceed your account balance, also be careful, your wallet address must have been valid, otherwise the withdrawal will be blocked.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>4. How to use the Referral Program?</h3>
<span></span>
</div>
<p>You can find information about the referral program on our website. Invite a friend, purchase packages together and get your bonus.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>5. Is there a minimum or maximum purchase amount?</h3>
<span></span>
</div>
<p>You can familiarize yourself with the cost of our packages in the Packages tab, the price ranges from $20 to $24,000</p>
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
<a href="../en.html"></a>
</div>
<nav class="navFooter-content">
<ul>
<li><a href="about.html">About</a></li>
<li><a href="package.html">Investment packages</a></li>
<li><a href="equipment.html">Equipment</a></li>
<li><a href="referral.html">Referral program</a></li>
<li class="active"><a href="faq.html">FAQ</a></li> </ul>
</nav>
<div class="auth-footer">
<a href="login.html">Log In</a>
<a class="sign" href="register.html">Get Started</a>
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
<a href="privacy-policy.html">Privacy policy</a>
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