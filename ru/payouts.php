


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
///////////////

$forwbal= "SELECT * FROM `userslog` WHERE uemail='$seslog'";
 $forwbalq = mysqli_query($db,$forwbal);
$forwbalv =mysqli_fetch_assoc($forwbalq);
$forwbaljs = $forwbalv['sumout'];


///////////////
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
<span>👋 Hi, <? echo $forwbalv['uemail']; ?></span>
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
<h2>Payouts</h2>
</div>
<div class="wh-block mr-b">
<div class="payout-dataForm">
<div class="item">
<div class="wh-block no-bg">
<div class="title-block">
<h3 class="ico01">Balance status</h3>
</div>
<div class="payout-wallet">
<p id="forwithdraw1" style="font-size:1.5em;">BTC 0</p>
</div>
<div class="balance-info no-line">
<div class="balance-infoItem">
<span>Withdrawal locked:</span>
<p id="withdralock">BTC 0</p>
</div>
<div class="balance-infoItem">
<span>Available balance:</span>
<p id="forwithdraw2">BTC 0</p>
</div>
</div>
</div>
</div>






<!---------------------------------->

 <div id="errors" class="alert notifycross" style="display:none;background:rgba(253,176,176,0.796); color:red; border-radius:5px; border-left:15px solid red;font-size:1.5em;box-shadow:1px 1px 10px red;" role="alert">
   fail
   </div>
 
 <!---------------------------------->
 <!---------------------------------->
<br>
 <div id="successrs" class="alert alert-success notifycross" style="display:none;color:green;border-radius:5px; border-right:15px solid green;background:rgba(189,255,189,0.861);font-size:1.5em; box-shadow:1px 1px 10px green;" role="alert">
</div>
 <!---------------------------------->
 
 
 
 
 
 
 
<div class="item">
<div class="wh-block no-bg">
<div class="title-block">
<h3 class="ico05">Make Payouts</h3>


</div>
<div class="payout-formBody">
<form>
<input type="hidden" name="_token" value="WiuK7iw0mYbkS7ZfXosHEQqrNVjBN9Ho6jiOeOnu">
<div class="field-group">
<div class="item">
<label>Enter wallet address:</label>
<div class="user-wallet">
<input id="withdrawallet" type="text">
</div>
</div>
<div class="item">
<label>Enter amount:</label>
<div class="payout-amount">
<div class="field-amount">
<input id="withdrawinpt" type="number">
</div>
</div>
</div>
</div>
</form>
<div class="field-btn">
<button id="withdrawbtn" style="background:orange; color:white; border-radius:29px; border:none; outline:none;"><span style="font-size:2em;padding:10px;">Send</span></button>
</div>

</div>
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


var btcpvjs1 = document.getElementById('forwithdraw1');
var btcpvjs2 = document.getElementById('forwithdraw2');

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "<? echo $btcpapi ?>",

    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function (response){
    var btcp = response.bitcoin.usd;
    var usdtobtc = 1/btcp * '<? echo $forwbaljs ?>';
  btcpvjs1.innerHTML = usdtobtc + ' BTC';
  btcpvjs2.innerHTML = usdtobtc + ' BTC';

});
/////////////////btc/////////////
// 0.0023255813953488

 /////////////////////////////////
$(document).on('click','#withdrawbtn',function(){
var withdwalet =$('#withdrawallet').val();
 var withdinpt = $('#withdrawinpt').val();
 if(withdinpt=="" || withdwalet==""){
   $('#errors').fadeIn(); 
    $('#errors').html(' × Enter All Fields');
    }else{ $.post(
      "checkout-btc-presale/byjs.php",
      {withdinptjs:withdinpt,withdwaletjs:withdwalet},
      function(withdinptf){
        if(withdinptf==1){
          vwbalock();
         $("#successrs").fadeIn();
          $("#successrs").html(' √ Withdrawal request send'); 

          $('#withdrawallet').val("");
          $('#withdrawinpt').val("");
        
         }
         if(withdinptf==0){
          $('#errors').fadeIn();
         $("#errors").html(' × something went wrong');
         }
         if(withdinptf==2){
          $('#errors').fadeIn();
          $("#errors").html(' × Enter Correct Amount');
         }
         if(withdinptf==3){
          $('#errors').fadeIn();
          $("#errors").html(' × Account Remaining Not Active ');
         }
        
        
    }); // end post 

         
    }
})
 /////////////////////////////////
/////////////////////////////////
 ///////////////////////////////
/////////////////////////////////////////
function vwbalock(){
    $.post(
      "checkout-btc-presale/byjs.php",
      {forvwbalock:'ofjjjd'},
      function(vlockwbal){
   $("#withdralock").html(vlockwbal);
   
    }); // end post
}     
 ///////////////////////////////
//////////////////////////////////
//////////////////////////////////
  $(document).on('click','.notifycross',function(){
      $('#errors').hide(100);
      $('#successrs').hide(100);
      $('.notifycross').hide(100);
    })
/////////////////////////////////////////
window.onload = vwbalock();












</script>

</body>
</html>