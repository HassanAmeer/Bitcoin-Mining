
<?php

include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['loginses']))
{ header('location:../index.php'); }

$seslog = $_SESSION['loginses'];


$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);


///////////////
$vseslog= "SELECT * FROM `userslog` WHERE uemail='$seslog'";
 $seslogq = mysqli_query($db,$vseslog);
$seslogv = mysqli_fetch_assoc($seslogq);
$tobtcjs = $seslogv['refbonus'];
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
<h2>Referral Program</h2>
</div>
<div class="account-refInfo">
<div class="item">
<div class="wh-block">
<div class="title-block line">
<h3 class="ico02">Referrals info</h3>
<div class="ref-status">
<? if($seslogv['totalref'] < 1){ echo 'Offline'; }else{ echo 'Online'; } ?>
</div>
</div>
<div class="refData">
<div class="item">
<span>Total profit</span>
<p id="usdtobtcdiv1" style="font-size:1.5em;"> 0 BTC</p>
</div>
<div class="item">
<span>Profit for month</span>
<p class="v2" id="usdtobtcdiv2" style="font-size:1em;">0 BTC</p>
</div>
<div class="item icon v1">
<span>Level : <span class="v1">N/A</span> </span>
</div>
</div>
</div>
</div>
<div class="item">
<div class="wh-block">
<div class="copy-refLink-title">
<h3>This is your referral link</h3>
<p>Share it with people and attract them to get bonuses</p>
</div>
<div class="copy-refLink">
<input class="important-message" type="text" value="<? echo $_SERVER['HTTP_HOST'].'/?referid='.$seslogv['uid']; ?>">
<p><? echo $_SERVER['HTTP_HOST'].'/?referid='.$seslogv['uid']; ?></p>
<button id="btnCopyAdress" onclick="copyToClipboard('.important-message')"><span><img src="../dev/img/copy.svg" > </span></button>
</div>
</div>
</div>
</div>
</div>
</section>
</section>
<script src="../dev/js/jquery.min.js"></script>
<script src="../dev/js/jquery.cookie.js"></script>
<script src="../dev/js/common.min.js"></script>

<script>


   ////////////////////btc price ////


var btcpvjs1 = document.getElementById('usdtobtcdiv1');
var btcpvjs2 = document.getElementById('usdtobtcdiv2');

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "<? echo $btcpapi ?>",

    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function (response){
    var btcp = response.bitcoin.usd;
    var usdtobtc = 1/btcp * '<? echo $tobtcjs ?>';
  btcpvjs1.innerHTML = usdtobtc + ' BTC';
  btcpvjs2.innerHTML = usdtobtc + ' BTC';
    
});
   /////////////////btc/////////////
  
</script>
</body>
</html>