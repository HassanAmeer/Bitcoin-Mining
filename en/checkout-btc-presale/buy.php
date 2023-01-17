


<?php

include '../../config.php';
session_start();
// error_reporting(0);
if(!isset($_SESSION['loginses']))
{ header('location:../../index.php'); }
///////////////
$byuser = $_SESSION['loginses'];
///////////////
$vseslog= "SELECT * FROM `userslog` WHERE uemail='$byuser'";
 $seslogq = mysqli_query($db,$vseslog);
$seslogv = mysqli_fetch_assoc($seslogq);
///////////////


$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);
///////////////
///////////////for check if any body want to buy a packege
if(isset($_GET['saleplan']))
{
  $salplan = $_GET['saleplan'];
  $planame = $_GET['planname'];
  $hashrate = $_GET['hrate'];
  $tofbtc = $_GET['pub'];
  $month = $_GET['month'];
  $orderid = uniqid();
}





///////////////end for check if any body want to buy a packege


///////////////pre packege for sale
$pre_sale= "SELECT * FROM `pre_sale` WHERE id=1";
 $pre_saleq = mysqli_query($db,$pre_sale);
$saleplans=mysqli_fetch_assoc($pre_saleq);
///////////////


if(isset($_POST['updatebtn']))
{
 $double=mysqli_real_escape_string($db,$_POST['double']);
 $salplan=mysqli_real_escape_string($db,$_POST['plansupd']);
 
  if($salplan == 1){
  $tofbtc = $saleplans['sale1'];
  $salplan = 1;
  $hashrate = 3050;
  $dayprofit = 0.37;
  }else if($salplan ==2){
   $tofbtc = $saleplans['sale2'];
   $salplan = 2;
   $hashrate = 12260;
   $dayprofit = 1.49;
  }else if($salplan ==3){
   $tofbtc = $saleplans['sale3'];
   $salplan = 3;
   $hashrate = 63500;
   $dayprofit = 7.71;
  }else if($salplan ==4){
   $tofbtc = $saleplans['sale4'];
   $salplan = 4;
   $hashrate = 124150;
   $dayprofit = 15.07;
  }else if($salplan ==5){
   $tofbtc = $saleplans['sale5'];
   $salplan = 5;
   $hashrate = 309600;
   $dayprofit = 37.59;
  }else if($salplan ==6){
   $tofbtc = $saleplans['sale6'];
   $salplan = 6;
   $hashrate = 616250;
   $dayprofit = 74.82;
  }else if($salplan ==7){
   $tofbtc = $saleplans['sale7'];
   $salplan = 7;
   $hashrate = 1230980;
   $dayprofit = 149.46;
  }else if($salplan ==8){
   $tofbtc = $saleplans['sale8'];
   $salplan = 8;
   $hashrate = 3085750;
   $dayprofit = 374.66;
  }
//////////////////////////for 2m
  $set2m=mysqli_real_escape_string($db,$_POST['set2m']);

  if($set2m == 1){
    $tofbtc = 5;
    $salplan = 1;
    $hashrate = 1200;
    $dayprofit = 0.15;
    }else if($set2m ==2){
     $tofbtc = 15;
     $salplan = 2;
     $hashrate = 3750;
     $dayprofit = 0.46;
    }else if($set2m ==3){
     $tofbtc = 45;
     $salplan = 3;
     $hashrate = 11250;
     $dayprofit = 1.37;
    }else if($set2m ==4){
     $tofbtc = 90;
     $salplan = 4;
     $hashrate = 22450;
     $dayprofit = 2.73;
    }else if($set2m ==5){
     $tofbtc = 255;
     $salplan = 5;
     $hashrate = 63600;
     $dayprofit = 7.72;
    }else if($set2m ==6){
     $tofbtc = 490;
     $salplan = 6;
     $hashrate = 121500;
     $dayprofit = 14.75;
    }else if($set2m ==7){
     $tofbtc = 1550;
     $salplan = 7;
     $hashrate = 385500;
     $dayprofit = 46.81;
    }elseif($set2m ==8){
     $tofbtc = 4700;
     $salplan = 8;
     $hashrate = 1173000;
     $dayprofit = 142.42;
    }
/////////////////////////////////////////for 4m
$set4m=mysqli_real_escape_string($db,$_POST['set4m']);

if($set4m == 1){
  $tofbtc = 10;
  $salplan = 1;
  $hashrate = 1250;
  $dayprofit = 0.15;
  }else if($set4m ==2){
   $tofbtc = 30;
   $salplan = 2;
   $hashrate = 3750;
   $dayprofit = 0.46;
  }else if($set4m ==3){
   $tofbtc = 90;
   $salplan = 3;
   $hashrate = 11200;
   $dayprofit = 1.36;
  }else if($set4m ==4){
   $tofbtc = 180;
   $salplan = 4;
   $hashrate = 22500;
   $dayprofit = 2.73;
  }else if($set4m ==5){
   $tofbtc = 510;
   $salplan = 5;
   $hashrate = 63700;
   $dayprofit = 7.73;
  }else if($set4m ==6){
   $tofbtc = 980;
   $salplan = 6;
   $hashrate = 122200;
   $dayprofit = 14.84;
  }else if($set4m ==7){
   $tofbtc = 3100;
   $salplan = 7;
   $hashrate = 387000;
   $dayprofit = 46.99;
  }elseif($set4m ==8){
   $tofbtc = 9400;
   $salplan = 8;
   $hashrate = 1177300;
   $dayprofit = 142.94;
  }
//////////////////////////////////////for 8m
$set8m=mysqli_real_escape_string($db,$_POST['set8m']);

if($set8m == 1){
  $tofbtc = 20;
  $salplan = 1;
  $hashrate = 1250;
  $dayprofit = 0.15;
  }else if($set8m ==2){
   $tofbtc = 60;
   $salplan = 2;
   $hashrate = 3750;
   $dayprofit = 0.46;
  }else if($set8m ==3){
   $tofbtc = 180;
   $salplan = 3;
   $hashrate = 11200;
   $dayprofit = 1.36;
  }else if($set8m ==4){
   $tofbtc = 360;
   $salplan = 4;
   $hashrate = 22500;
   $dayprofit = 2.73;
  }else if($set8m ==5){
   $tofbtc = 1020;
   $salplan = 5;
   $hashrate = 63700;
   $dayprofit = 7.73;
  }else if($set8m ==6){
   $tofbtc = 1960;
   $salplan = 6;
   $hashrate = 122200;
   $dayprofit = 14.86;
  }else if($set8m ==7){
   $tofbtc = 6200;
   $salplan = 7;
   $hashrate = 387000;
   $dayprofit = 46.99;
  }elseif($set8m ==8){
   $tofbtc = 18800;
   $salplan = 8;
   $hashrate = 1177300;
   $dayprofit = 142.94;
  }
 
  $tofbtc = $tofbtc * $double;
  $hashrate = $hashrate * $double;
  $dayprofit = $dayprofit * $double;
}





//////////////////for generate unique adress to accept payments
/*
$my_callback_url = 'https://'.$_SERVER['HTTP_HOST'].'/en/confirmpay.php?invoice_id='.$orderid.'&secret='.$secret;

$root_url = 'https://api.blockchain.info/v2/receive';

$parameters = 'xpub=' .$my_xpub. '&callback=' .urlencode($my_callback_url). '&key=' .$my_api_key;

$response = file_get_contents($root_url . '?' . $parameters);

$object = json_decode($response);
*/
//////this is for generate address every refresh time
//1. delet after original bottom adress generate
  $genadress = '7hTXyyRTpXSC8qcobmf8wC9ya9k5iSp6Wo';
//2. uncomment after api connected
// $genadress = $object->address;
 
//////////////////////////////////////////////////////////////////////////end of generate unique adress to accept payments









////////////////////////////
if(isset($_POST['okpaybtn']))
{

$setoridtbl=mysqli_real_escape_string($db,$_POST['orderidset']);
$intodays=mysqli_real_escape_string($db,$_POST['intodays']);
$towallet=mysqli_real_escape_string($db,$_POST['towallet']);
$getbtcjs=mysqli_real_escape_string($db,$_POST['intobtc']);
$planno=mysqli_real_escape_string($db,$_POST['salplan']);
$dlyprof=mysqli_real_escape_string($db,$_POST['dlyprof']);
$btcinusd=mysqli_real_escape_string($db,$_POST['btcinusd']);
$pkgname=mysqli_real_escape_string($db,$_POST['pkgnam']);
 
$cashhist = "INSERT INTO `orderhis`(`orderid`,`byuser`,`days`,`pkgname`,`plansno`, `wallet`, `btcpay`,`btcinusd`,`dailyprofit`) VALUES ('$setoridtbl','$byuser','$intodays','$pkgname','$planno','$towallet','$getbtcjs','$btcinusd','$dlyprof')";
   
 $cashhistq = mysqli_query($db,$cashhist);
 if($cashhist){
   header('location:../my-orders.php');
 }
}
////////////////////////end 






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
<link href="../../dev/css/profile.min.css" rel="stylesheet">
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
<a href="../dashboard.php"></a>
</div>
<nav class="nav-sidebar">
<ul>
<li><a class="ico01" href="../dashboard.php">Overview</a></li>
<li><a class="ico02" href="../package-buy.php">Buy a package</a></li>
<li><a class="ico03" href="../payouts.php">Payouts</a></li>
<li><a class="ico04" href="../my-orders.php">Orders History</a></li>
<li><a class="ico06" href="../referral-program.php">Referral program</a></li>
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
<h2>Order Payment</h2>
</div>
<div class="payment-content">
<div class="item">
<div class="wh-block">
<div class="title-block line">
<h3 class="ico01">Selected package</h3>
</div>

<h1 style="color:gold"> <? $tofbtc; ?> </h1>


<form method="post" action="">
<div class="config-payPackage">
<div class="item">
 <!-- //////////////////////////////////////////////////////////////////////PreSale -->
 <? if($planame=='presale'){ ?>
<select class="list-package" name="plansupd">
  
<option data-icon="1" value="1" <? if($salplan==1){ echo 'selected'; } ?>
 >Pre-Sale 1</option>
<option data-icon="1" <? if($salplan==2){ echo 'selected'; } ?> value="2">Pre-Sale 2</option>
<option data-icon="2" <? if($salplan==3){ echo 'selected'; } ?> value="3">Pre-Sale 3</option>
<option data-icon="2" <? if($salplan==4){ echo 'selected'; } ?> value="4">Pre-Sale 4</option>
 <option data-icon="2" <? if($salplan==5){ echo 'selected'; } ?> value="5">Pre-Sale 5</option>
<option data-icon="3" <? if($salplan==6){ echo 'selected'; } ?> value="6">Pre-Sale 6</option>
<option data-icon="3" <? if($salplan==7){ echo 'selected'; } ?> value="7">Pre-Sale 7</option>
<option data-icon="3" <? if($salplan==8){ echo 'selected'; } ?> value="8">Pre-Sale 8</option>
</select>
<? } ?>
<!--////////////////////////////////////////////////////////////////////////2m -->
<? if($planame=='2m'){ ?>
<select class="list-package" name="set2m">
  
<option data-icon="1" value="1" <? if($salplan==1){ echo 'selected'; } ?>
 >silver 1</option>
<option data-icon="1" <? if($salplan==2){ echo 'selected'; } ?> value="2">silver 2</option>
<option data-icon="2" <? if($salplan==3){ echo 'selected'; } ?> value="3">gold 1</option>
<option data-icon="2" <? if($salplan==4){ echo 'selected'; } ?> value="4">gold 2</option>
 <option data-icon="2" <? if($salplan==5){ echo 'selected'; } ?> value="5">Platinum 1</option>
<option data-icon="3" <? if($salplan==6){ echo 'selected'; } ?> value="6">Platinum 2</option>
<option data-icon="3" <? if($salplan==7){ echo 'selected'; } ?> value="7">Diamond  1</option>
<option data-icon="3" <? if($salplan==8){ echo 'selected'; } ?> value="8">Diamond  2</option>
</select>
<? } ?>
<!--////////////////////////////////////////////////////////////////////////4m -->
<? if($planame=='4m'){ ?>
<select class="list-package" name="set4m">
  
<option data-icon="1" value="1" <? if($salplan==1){ echo 'selected'; } ?>
 >silver 1</option>
<option data-icon="1" <? if($salplan==2){ echo 'selected'; } ?> value="2">silver 2</option>
<option data-icon="2" <? if($salplan==3){ echo 'selected'; } ?> value="3">gold 1</option>
<option data-icon="2" <? if($salplan==4){ echo 'selected'; } ?> value="4">gold 2</option>
 <option data-icon="2" <? if($salplan==5){ echo 'selected'; } ?> value="5">Platinum 1</option>
<option data-icon="3" <? if($salplan==6){ echo 'selected'; } ?> value="6">Platinum 2</option>
<option data-icon="3" <? if($salplan==7){ echo 'selected'; } ?> value="7">Diamond 1</option>
<option data-icon="3" <? if($salplan==8){ echo 'selected'; } ?> value="8">Diamond 2</option>
</select>
<? } ?>
<!--////////////////////////////////////////////////////////////////////////8m -->
<? if($planame=='8m'){ ?>
<select class="list-package" name="set8m">
  
<option data-icon="1" value="1" <? if($salplan==1){ echo 'selected'; } ?>
 >silver 1</option>
<option data-icon="1" <? if($salplan==2){ echo 'selected'; } ?> value="2">silver 2</option>
<option data-icon="2" <? if($salplan==3){ echo 'selected'; } ?> value="3">gold 1</option>
<option data-icon="2" <? if($salplan==4){ echo 'selected'; } ?> value="4">gold 2</option>
 <option data-icon="2" <? if($salplan==5){ echo 'selected'; } ?> value="5">Platinum 1</option>
<option data-icon="3" <? if($salplan==6){ echo 'selected'; } ?> value="6">Platinum 2</option>
<option data-icon="3" <? if($salplan==7){ echo 'selected'; } ?> value="7">Diamond 1</option>
<option data-icon="3" <? if($salplan==8){ echo 'selected'; } ?> value="8">Diamond 2</option>
</select>
<? } ?>
<!--////////////////////////////////////////////////////////////////////////end -->
</div>
<div class="item">
<div class="config-payAmount">
<p>Double:</p>
<span class="down"></span>
<input class="amount_input" type="text" name="double" value="1" />
<span class="up"></span>
</div>
</div>
<div class="item">
<button type="submit" name="updatebtn"><span>Update</span></button>
</div>
</div>
</form>



<div class="pay-packageInfo">
<div class="item">
<p>Hash</p>
<span><? echo $hashrate; ?> GH/s</span>
</div>
<div class="item">
<p>Duration</p>
<span><? echo $month; ?> months</span>
</div>
<div class="item">
<p>Order code</p>
<span><? echo $orderid; ?></span>
<br>

</div>

</div>
  <center>
<form method="POST" action="" style="width:100%;">
  <input type="hidden" name="orderidset" value="<? echo $orderid ?>">
  <? if($month==2){
    $intodays = 60;
  }elseif($month==4){
    $intodays = 120;
  }elseif($month==8){
    $intodays = 240;
  } ?>
  <input type="hidden" name="intodays" value="<? echo $intodays; ?>">
  <input type="hidden" name="pkgnam" value="<? echo $planame; ?>">
  <input type="hidden" name="salplan" value="<? echo $salplan; ?>">
  <input type="hidden" name="dlyprof" value="<? echo $dayprofit; ?>">
  <input type="hidden" name="btcinusd" value="<? echo $tofbtc; ?>">
  <input type="hidden" name="towallet" value="<? echo $genadress; ?>">
  <input type="hidden" id="getbtcjs" name="intobtc" value="">
  
  
  <button type="submit" name="okpaybtn" style="400px; color:rgb(107,206,107); background:black; border-radius:10px;font-size:1.7em;box-shadow:1px 1px 5px rgba(10,96,0,0.641); border:1px dashed rgba(79,81,0,0.66); opacity:0.7;"> check back</button>
</form>
</center>
</div>
</div>




<div class="item">
<div class="wh-block">
<div class="pay-infoBlock">
<div class="pay-info">
<p>Please send <span id="tofbtc"> </span> BTC to the following address or scan the QR code.</p>
<div class="copy-address">
<span>Payment address</span>
<input class="important-message" type="text" value="<? echo $genadress; ?>">
<p><? echo $genadress; ?></p>
<button id="btnCopyAdress" onclick="copyToClipboard('.important-message')"><span>Copy</span></button>
</div>
</div>
<div class="pay-qr">
<div id="qr-code"></div>
<script>$('#qr-code').qrcode("<? echo $genadress; ?>");</script>
</div>
</div>
</div>
</div>


 


<div class="item">
<div class="wh-block">
<div class="title-block line">
<h3 class="ico03">Reinvest form</h3>
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


<div class="reinvest-discount center">
<p>Dear client, when paying from the balance there is an additional <span>10%</span> discount.</p>
</div>
<div class="reinvest-message">
<? if($seslogv['sumout'] < 1){ ?>
<p>Insufficient funds to pay from the balance</p>
<? } ?>
</div>


<? if($seslogv['sumout'] > 0){ ?>
<!---for reinvestors div ----->
 <center>
   <h4 style="color:#db8e00"> Available Balance In <b style="color:aqua;"> $ </b> For Exchange </h4><p style="color:silver;"> In Previous Packege</p>
 </center>
 <br>
<div style="display:flex;flex-direction:row;width:100%;">
  <div style="width:25%;"><input id="userinvst" style="color:silver;border-radius:5px;border:1px solid rgb(107,206,107);background:black; width:100%;font-size:1.5em;letter-spacing:3px;" value=" " disabled=""></div>

  <div style="width:10%;"><img src="../../dev/img/ico03h.svg" style="width:100%; max-height:2em;"></div>
  <div style="width:30%;">
    <input id="exchginpt" placeholder="$" type="number" style="color:lime; border:1px solid rgb(107,206,107); border-radius:5px;width:100%;background:black;font-size:1.5em;">
  </div>

  <div style="width:20%; padding-left:15px">
    <button id="exchgbtn" style="border-radius:10px;border:none; border-left:5px solid orange;font-size:1.5em;box-shadow:1px 1px 7px silver;background:silver; color:indigo;"> Exchange </button>
  </div>


</div>
<!---end for reinvestors div --->
<? } ?>




</div>
</div>
</div>
</div>
</section>
</section>
<script src="../../dev/js/jquery.min.js"></script>
<script src="../../dev/js/jquery.cookie.js"></script>
<script src="../../dev/js/common.min.js"></script>
<script src="../../dev/js/jquery.qrcode.min.js"></script>
<script src="../../dev/js/jquery.nice-select.js"></script>
<script src="../..//dev/js/fastclick.js"></script>

<script>
        $(document).ready(function() {
            $('#qr-code').qrcode("<? echo $genadress; ?>");
            $('.list-package').niceSelect();
            FastClick.attach(document.body);
            $('.down').click(function(e) {
                var value = +$('.amount_input').val();
                value = (value) - 1;
                if (value < 1) {
                    value = 1
                }
                $('.amount_input').val(value).attr("value", value);
            });
            $('.up').click(function(e) {
                var value = +$('.amount_input').val();
                value = (value) + 1;
                if (value > 99) {
                    value = 99
                }
                $('.amount_input').val(value).attr("value", value);
            });
            $('.amount_input').click(function() {
                $(this).focus().select();
            });
            $('.amount_input').bind("change keyup input click", function() {
                if (this.value.match(/[^0-9]/g)) {
                    this.value = this.value.replace(/[^0-9]/g, '');
                }
            });
        });
        
        
   ////////////////////btc price ////


var tofbtc = document.getElementById('tofbtc');
var getbtcto = document.getElementById('getbtcjs');

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "<? echo $btcpapi ?>",

    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function (response){
    var btcp = response.bitcoin.usd;
    var usdtobtc = 1/btcp * '<? echo $tofbtc ?>';
  tofbtc.innerHTML = usdtobtc;
   getbtcto.value = usdtobtc;
});
  /////////////////btc/////////////
  
 /////////////////////////////////
$(document).on('click','#exchgbtn',function(){
 var exchginpt = $('#exchginpt').val();
 if(exchginpt==""){
   $('#errors').fadeIn(); 
    $('#errors').html(' × Enter Amount');
    }else{ $.post(
      "byjs.php",
      {exchginptjs:exchginpt},
      function(exchbal){
        if(exchbal==1){
         $("#successrs").fadeIn();
          $("#successrs").html(' √ Exchange In Package '); $('#exchginpt').val("");
           usrinvsts();
         }
         if(exchbal==0){
          $('#errors').fadeIn();
         $("#errors").html(' × something went wrong');
         }
         if(exchbal==2){
          $('#errors').fadeIn();
          $("#errors").html(' × Enter Correct Amount');
         }
        
    }); // end post
    }
})
 /////////////////////////////////
/////////////////////////////////////////
function usrinvsts(){
    $.post(
      "byjs.php",
      {usrinvst:'osxjjd'},
      function(usrinvsts){
   $("#userinvst").val(usrinvsts +'$');
    }); // end post
}     
 ///////////////////////////////
//////////////////////////////////
/////////////////////////////////////
  $(document).on('click','.notifycross',function(){
      $('#errors').hide(100);
      $('#successrs').hide(100);
      $('.notifycross').hide(100);
    })
/////////////////////////////////////////
window.onload = usrinvsts();
    </script>
</body>
</html>