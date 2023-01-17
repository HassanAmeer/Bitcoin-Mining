

<?php

include '../config.php';
session_start();
 error_reporting(0);
if(!isset($_SESSION['loginses']))
{ header('location:../index.php'); }


$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);


///////////////pre packege for sale
$pre_sale= "SELECT * FROM `pre_sale` WHERE id=1";
 $pre_saleq = mysqli_query($db,$pre_sale);
$saleplans=mysqli_fetch_assoc($pre_saleq);
///////////////
///////////////);
$vseslog= "SELECT * FROM `userslog` WHERE uemail='$seslog'";
 $seslogq = mysqli_query($db,$vseslog);
$seslogv = mysqli_fetch_assoc($seslogq);
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
<link href="../dev/css/profile.min.css" rel="stylesheet">
</head>
<body>
<form id="logout-form" action="https://greenhashes.io/en/logout" method="POST" style="display: none;">
<input type="hidden" name="_token" value="WiuK7iw0mYbkS7ZfXosHEQqrNVjBN9Ho6jiOeOnu">
</form>
<section class="head-userName">
<span>👋 Hi, <? echo $seslogv['uemail']; ?></span>
</section>
<section class="account-body">
<section class="left-sidebar">
<div class="sidebar-content">
<div class="logo">
    <a href="dashboard.php"> </a>
</div>
<nav class="nav-sidebar">
    <ul>
        <li class="active"><a class="ico01" href="dashboard.php">Overview</a></li>
        <li><a class="ico02" href="package-buy.php">Buy a package</a></li>
        <li><a class="ico03" href="payouts.php">Payouts</a></li>
        <li><a class="ico04" href="my-orders.php">Orders History</a></li>
        <li><a class="ico06" href="referral-program.php">Referral program</a></li>
        </ul>
    </nav>
  <div class="sidebar-info">
<a class="ico02" href="<? echo $vstng['instalink']; ?>" target="_blank"></a>
<a class="ico03" href="<? echo $vstng['tglink']; ?>" target="_blank"></a>
<a class="ico04" href="<? echo $vstng['fblink']; ?>" target="_blank"></a>
<a class="ico05" href="<? echo $vstng['twlink']; ?>" target="_blank"></a>
    </div>
</div>
</section>
<section class="main-content">
    <div class="btn-logout">
        <a href="out.php">Logout</a>
        </div>
<div class="wrap-content">
<div class="page-title">
<h2>Packages</h2>
</div>
<ul class="tabs">
<li class="current presale">
<a href="#months2">PreSale</a>
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
<div class="plansItem-block user ico01">
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
<span>≈0.36$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=1&planname=presale&hrate=3050&pub=<? echo $saleplans['sale1'] ?>&month=4">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-15%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈1.44$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=2&planname=presale&hrate=12260&pub=<? echo $saleplans['sale2'] ?>&month=4">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-20%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈7.47$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=3&planname=presale&hrate=63500&pub=<? echo $saleplans['sale3'] ?>&month=4">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-25%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈14.60$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=4&planname=presale&hrate=124150&pub=<? echo $saleplans['sale4'] ?>&month=4">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-30%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈36.42$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=5&planname=presale&hrate=309600&pub=<? echo $saleplans['sale5'] ?>&month=4">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-35%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈72.49$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=6&planname=presale&hrate=616250&pub=<? echo $saleplans['sale6'] ?>&month=4">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-40%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈144.79$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=7&planname=presale&hrate=1230980&pub=<? echo $saleplans['sale7'] ?>&month=4">Get Started</a>
</div>
<div class="plansItem-alertBox icon icon-20 v4">
-45%
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈362.96$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=8&planname=presale&hrate=3085750&pub=<? echo $saleplans['sale8'] ?>&month=4">Get Started</a>
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
<div class="plansItem-block user ico01">
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
<span>≈0.14$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=1&planname=2m&hrate=1200&pub=5&month=2">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈0.44$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=2&planname=2m&hrate=3750&pub=15&month=2">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈1.32$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=3&planname=2m&hrate=11250&pub=45&month=2">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈2.64$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=4&planname=2m&hrate=22450&pub=90&month=2">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈7.48$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=5&planname=2m&hrate=63600&pub=255&month=2">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈14.29$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=6&planname=2m&hrate=121500&pub=490&month=2">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈45.34$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=7&planname=2m&hrate=385500&pub=1550&month=2">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈137.97$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=8&planname=2m&hrate=1173000&pub=4700&month=2">Get Started</a>
</div>
</div>
</div>
</div>
</div>
<div class="tab_content tab-pane fade" id="months4">
<div class="plans-content">
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈0.15$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=1&planname=4m&hrate=1250&pub=10&month=4">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈0.44$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=2&planname=4m&hrate=3750&pub=30&month=4">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈1.32$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=3&planname=4m&hrate=11200&pub=90&month=4">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈2.65$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=4&planname=4m&hrate=22500&pub=180&month=4">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈7.49$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=5&planname=4m&hrate=63700&pub=510&month=4">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈14.37$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=6&planname=4m&hrate=122200&pub=980&month=4">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈45.52$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=7&planname=4m&hrate=387000&pub=3100&month=4">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈138.48$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=8&planname=4m&hrate=1177300&pub=9400&month=4">Get Started</a>
</div>
</div>
</div>
</div>
</div>
<div class="tab_content tab-pane fade" id="months8">
<div class="plans-content">
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈0.14$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=1&planname=8m&hrate=1200&pub=20&month=8">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈0.44$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=2&planname=8m&hrate=3750&pub=60&month=8">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈1.32$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=3&planname=8m&hrate=11200&pub=180&month=8">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico01">
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
<span>≈2.65$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=4&planname=8m&hrate=22500&pub=360&month=8">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈7.49$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=5&planname=8m&hrate=63700&pub=1020&month=8">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico02">
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
<span>≈14.37$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=6&planname=8m&hrate=122200&pub=1960&month=8">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈45.52$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=7&planname=8m&hrate=387000&pub=6200&month=8">Get Started</a>
</div>
</div>
</div>
<div class="plansItem">
<div class="plansItem-block user ico03">
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
<span>≈138.48$</span>
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
<a href="checkout-btc-presale/buy.php?saleplan=8&planname=8m&hrate=1177300&pub=18800&month=8">Get Started</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section>
<script src="..//dev/js/jquery.min.js"></script>
<script src="../dev/js/jquery.cookie.js"></script>
<script src="../dev/js/common.min.js"></script>
<script src="../dev/js/jquery.classycountdown.js"></script>
<script src="../dev/js/jquery.knob.js"></script>
<script src="../dev/js/jquery.throttle.js"></script>
<script>
        $('.discount-timer').ClassyCountdown({
            theme: "white",
            now:  1653112400,
            end: 1630882800,
        });
    </script>
</body>
</html>