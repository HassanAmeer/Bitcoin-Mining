


<?php

include '../config.php';
session_start();
// error_reporting(0);

$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);
///////////////
///////////////pre packege for sale
$pre_sale= "SELECT * FROM `pre_sale` WHERE id=1";
 $pre_saleq = mysqli_query($db,$pre_sale);
$saleplans=mysqli_fetch_assoc($pre_saleq);
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
<div class="plans-bg">
<header class="header-content">
<div class="logo">
<a href="../index.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li><a href="about.php">About</a></li>
<li class="active"><a href="package.php">Investment packages</a></li>
<li><a href="equipment.php">Equipment</a></li>
<li><a href="referral.php">Referral program</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang en">
en
<ul>
<li>
<a href="../ru/package.php" class="ru">ru</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Log In</a>
<a class="sign" href="register.php">Get Started</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="plansPage-titleBody">
<div class="plansPage-title">
<h1>Investment Packages</h1>
<p>Choose any valid package that meets all your requirements. Each package has its own advantage.</p>
</div>
</div>
</div>
<div class="plansPage-content">
<ul class="tabs">
<li class="current presale">
<a href="#presale">PreSale</a>
</li>
<li>
<a href="#months2">2 months</a>
</li>
<li>
<a href="#months4">4 months</a>
</li>
<li>
<a href="#months8">8 months</a>
</li>
</ul>
<div class="tab_content tab-pane fade show active" id="presale">
<div class="presale-info">
<p>Pre-Sale Packages will be activated <span>14 days</span> after the purchase date.</p>
</div>
<div class="plans-content">
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Pre-Sale 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???0.37$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>3050 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale1']; ?></p>
<span>$ <? echo $saleplans['strike1']; ?></span>
 </div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-15%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Pre-Sale 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???1.49$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>12260 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale2']; ?></p>
<span>$ <? echo $saleplans['strike2']; ?></span>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-20%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Pre-Sale 3</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???7.71$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>63500 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale3']; ?></p>
<span>$ <? echo $saleplans['strike3']; ?></span>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-25%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
 <div class="plansItem-title"><h2>Pre-Sale 4</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???15.07$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>124150 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale4']; ?></p>
<span>$ <? echo $saleplans['strike4']; ?></span>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-30%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Pre-Sale 5</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???37.59$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>309600 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale5']; ?></p>
<span>$ <? echo $saleplans['strike5']; ?></span>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-35%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Pre-Sale 6</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???74.82$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>616250 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale6']; ?></p>
<span>$ <? echo $saleplans['strike6']; ?></span>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-40%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Pre-Sale 7</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???149.46$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>1230980 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale7']; ?></p>
<span>$ <? echo $saleplans['strike7']; ?></span>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-45%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Pre-Sale 8</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???374.66$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>3085750 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ <? echo $saleplans['sale8']; ?></p>
<span>$ <? echo $saleplans['strike8']; ?></span>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-50%
</div>
</div>
</div>
</div>
</div>
<div class="tab_content tab-pane fade" id="months2">
<div class="plans-content">
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Silver 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???0.15$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>1200 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 5</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Silver 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???0.46$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>3750 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 15</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Gold 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???1.37$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>11250 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 45</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Gold 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???2.73$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>22450 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 90</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Platinum 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???7.72$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>63600 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 255</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Platinum 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???14.75$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>121500 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 490</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Diamond 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???46.81$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>385500 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 1550</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Diamond 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>2 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???142.42$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>1173000 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 4700</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
</div>
</div>
<div class="tab_content tab-pane fade" id="months4">
<div class="plans-content">
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Silver 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???0.15$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>1250 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 10</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Silver 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
 <span>???0.46$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>3750 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 30</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Gold 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???1.36$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>11200 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 90</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Gold 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???2.73$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>22500 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 180</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Platinum 1</h2></div>
<div class="plansItem-info">
<div class="data">
 <p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???7.73$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>63700 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 510</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Platinum 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???14.84$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>122200 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 980</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Diamond 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???46.99$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>387000 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 3100</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Diamond 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>4 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???142.94$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>1177300 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 9400</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
</div>
</div>
<div class="tab_content tab-pane fade" id="months8">
<div class="plans-content">
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Silver 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???0.15$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>1200 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 20</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Silver 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
 <p>Daily profit</p>
<span>???0.46$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>3750 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 60</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Gold 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???1.36$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>11200 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 180</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico01">
<div class="plansItem-title"><h2>Gold 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Silver</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???2.73$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>22500 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 360</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Platinum 1</h2></div>
<div class="plansItem-info">
 <div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???7.73$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>63700 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 1020</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico02">
<div class="plansItem-title"><h2>Platinum 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Gold</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???14.84$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>122200 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 1960</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Diamond 1</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???46.99$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>387000 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 6200</p>
</div>
<div class="plansItem-link">
 <a href="login.php">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block ico03">
<div class="plansItem-title"><h2>Diamond 2</h2></div>
<div class="plansItem-info">
<div class="data">
<p>Referral level</p>
<span>Platinum</span>
</div>
<div class="data">
<p>Duration of the contract</p>
<span>8 months</span>
</div>
<div class="data">
<p>Daily profit</p>
<span>???142.94$</span>
</div>
<div class="data">
<p>Number of hashes</p>
<span>1177300 GH/s</span>
</div>
</div>
<div class="plansItem-price">
<p>$ 18800</p>
</div>
<div class="plansItem-link">
<a href="login.php">Get Started</a>
</div>
</div>
</div>
</div>
</div>
</div>
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
<li class="active"><a href="package.php">Investment packages</a></li>
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
Copyright ?? 2022
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
<script src="../dev/js/jquery.classycountdown.js"></script>
<script src="../dev/js/jquery.knob.js"></script>
<script src="../dev/js/jquery.throttle.js"></script>
<script>
        $('.discount-timer').ClassyCountdown({
            theme: "white",
            now:  1653021329,
            end: 1630882800,
        });
    </script>
</body>

</html>