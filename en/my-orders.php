

<?php

include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['loginses']))
{ header('location:../index.php'); }
$byuser=$_SESSION['loginses'];
///////////////
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
<link href="../dev/css/profile.min.css" rel="stylesheet">
</head>
<body>
<form id="logout-form" action="https://greenhashes.io/en/logout" method="POST" style="display: none;">
<input type="hidden" name="_token" value="WiuK7iw0mYbkS7ZfXosHEQqrNVjBN9Ho6jiOeOnu">
</form>
<section class="head-userName">
<span>👋 Hi, <? echo $byuserv['uemail']; ?></span>
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
<h2>My orders</h2>
</div>
<div class="table-wrap">
<div class="table-body orders">
<div class="table-row title">
<div class="table-td">Payment Number</div>
<div class="table-td">Days</div>
<div class="table-td">Date & time</div>
<div class="table-td">Status</div>
</div>
<?
///////////////
$byuserset= "SELECT * FROM `orderhis` WHERE byuser='$byuser'";
 $byusersetq = mysqli_query($db,$byuserset);
while($byuserv = mysqli_fetch_array($byusersetq))
///////////////
{ ?>
<div class="table-row">
<div class="table-td">
<div class="openDetails status-v1"><? echo $byuserv['orderid']; ?></div>
</div>
<div class="table-td"><? echo $byuserv['days']; ?></div>
<div class="table-td"><? echo $byuserv['time']; ?></div>
<div class="table-td">
<? if($byuserv['status']==0){ ?>
<span class="pay-status-v1">Process</span><? }else{ ?>
<span class="pay-status-v2"> Success </span> <? } ?>
</div>
</div>
<div class="order-payInfo">
<div class="order-payInfo-content">
<div class="item">
<p class="title">Pay for the order</p>
</div>
<div class="item">
<span>Wallet</span>
<a class="wallet" href="https://www.blockchain.com/btc/address/<? echo $byuserv['wallet']; ?>" target="_blank"><? echo $byuserv['wallet']; ?></a>
</div>
<div class="item">
<span>Price to pay</span>
<p class="price"><? echo substr($byuserv['btcpay'],0,7); ?> BTC</p>
</div>
<div class="item">
<a class="view" href="https://www.blockchain.com/btc/address/<? echo $byuserv['wallet']; ?>" target="_blank">View</a>
</div>
</div>
</div>
<? } ?>


</div>
</div>
</div>
</section>
</section>
<script src="../dev/js/jquery.min.js"></script>
<script src="../dev/js/jquery.cookie.js"></script>
<script src="../dev/js/common.min.js"></script>


</body>
</html>