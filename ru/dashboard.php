

<?php

include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['loginses']))
{ header('location:../index.php'); }


$seslog = $_SESSION['loginses'];
//////////////
$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);
///////////////
$vseslog= "SELECT * FROM `userslog` WHERE uemail='$seslog'";
 $seslogq = mysqli_query($db,$vseslog);
$seslogv = mysqli_fetch_assoc($seslogq);
/////////////// start for get dates
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
/////// 0.
  /////start
$clctnobuy = " SELECT COUNT(by_orderid) AS trowusr FROM `activepkg` WHERE byuser ='$seslog'";
$clctnobuyq = mysqli_query($db,$clctnobuy);
$vnobuy = mysqli_fetch_assoc($clctnobuyq);
   ///// end
/////// 1.
$dlyprofchk = "SELECT SUM(dailyprofitusd) AS multibns, SUM(howdays) as hdays, SUM(endtime) as fnlendtim FROM activepkg WHERE byuser='$seslog'";
  $dprofchkq = mysqli_query($db, $dlyprofchk);
 $dprofv = mysqli_fetch_assoc($dprofchkq);
 //////// 2.
$vstrtim = "SELECT * FROM `activepkg` WHERE byuser='$seslog'";
  $vstrtimq = mysqli_query($db, $vstrtim);
 $vstrtimv = mysqli_fetch_assoc($vstrtimq);
 
 $rmngtime = time() - $vstrtimv['starttime'];
 $bnstime = $rmngtime / 84600 ;
 $tprof = $dprofv['multibns'] * $bnstime;
 
 /////
 $chkendtim = time() * $vnobuy['trowusr'];
 /////
if(!isset($_COOKIE['cooki']))
{
  if($chkendtim <  $dprofv['fnlendtim'])
  {
  $setsout = "UPDATE `userslog` SET `sumout`=sumout+'$tprof' WHERE uemail = '$seslog'";
  $setoutq = mysqli_query($db,$setsout);
////////
    $restrtim = time();
if($setoutq)
{ $setsout = "UPDATE `activepkg` SET `starttime`='$restrtim'  WHERE byuser = '$seslog'";
  mysqli_query($db,$setsout); }

/////
 $insrtfchart = "INSERT INTO `bonuschart`(`byuser`, `bonus`) VALUES ('$seslog','$tprof')";
  mysqli_query($db,$insrtfchart);
/////
setcookie('cooki','cooki',time() + 86400);
  }else{
    echo ' <div id="errors" class="alert notifycross" style="display:none;background:rgba(253,176,176,0.796); color:red; border-radius:5px; border-left:15px solid red;font-size:1.5em;box-shadow:1px 1px 10px red;" role="alert">
    Packege End Can Buy more from Deposit Amount  
   </div>';
  }
}
//end cooki
 
 //// for chart bonus
 $vchartbns = "SELECT * FROM `bonuschart` WHERE byuser='$seslog' ORDER BY id DESC LIMIT 5";
 $vchartbnsq = mysqli_query($db, $vchartbns);
while($vbnschart = mysqli_fetch_array($vchartbnsq))
{ $fchartval .= $vbnschart['bonus'].','; 
}
if($fchartval == "")
{ $zerov = 0;
  $fchartvalv = $zerov.','.$zerov.','.$zerov.','.$zerov.','.$zerov;
}else{ $fchartvalv = $fchartval;}




///////// start
  $timebef = time();
  $cut4day = 84600 * 4;
  $v4days = date('d/m/y', $timebef-$cut4day);
  
  $cut3day = 84600 * 3;
  $v3days = date('d/m/y', $timebef-$cut3day);

  $cut2day = 84600 * 2;
  $v2days = date('d/m/y', $timebef-$cut2day);

  $cut1day = 84600 * 1;
  $v1days = date('d/m/y', $timebef-$cut1day);
  
$v0days = date('d/m/y', $timebef);
  //////// end
  
 
 














//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
///////////////
$vseslog= "SELECT * FROM `userslog` WHERE uemail='$seslog'";
 $seslogq = mysqli_query($db,$vseslog);
$seslogv = mysqli_fetch_assoc($seslogq);

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
<form id="logout-form" action="" method="POST" style="display: none;">
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
<h2>Overview</h2>
</div>
<div class="home-section">
<div class="item">
<div class="wh-block">
<div class="title-block line v2">
<h3 class="ico01">Balance</h3>
<a class="btn-gold" href="payouts.php">Cash out</a>
</div>
<div class="balance-wallet">$ <? echo $seslogv['sumout']; ?></div>
<div class="balance-info">
<div class="balance-infoItem">
<span>Daily profit</span>
<p>$ <? echo substr($dprofv['multibns'],0,7); ?>
</p>
</div>
<div class="balance-infoItem">
<span>BTC/USD</span>
<p id="bitcoinprice">$ 29,250.78</p>
</div>
<div class="balance-infoItem">
<span>Total profit</span>
<p>$ <? echo substr($dprofv['multibns'] * $dprofv['hdays'] ,0,7); ?></p
></div>
<div class="balance-infoItem">
<span>Profit for month</span>
<p> $ <? echo substr($dprofv['multibns'] * 30 ,0,7); ?> </p>
</div>
</div>
</div>
</div>
<div class="item">
<div class="wh-block refBg">
<div class="title-block">
<h3 class="ico02">Referrals info</h3>
</div>
<div class="home-referralInfo">
<div class="item">
<span>$ <? echo $seslogv['refbonus']; ?></span>
<p>Profit</p>
</div>
<div class="item">
<span> <? echo $seslogv['totalref']; ?></span>
<p>Referrals</p>
</div>
</div>
<div class="home-referralLink">
<p>Earn more with the best referral program H2Hashes</p>
<a href="referral-program.php">Learn more</a>
</div>
</div>
</div>
<div class="item">
<div class="wh-block">
<div class="title-block">
<h3 class="no-ico">Daily Profit Chart</h3>
</div>
<canvas id="container" style="width:100%;max-width:100%; height:250px;"></canvas>
</div>
</div>
</div>
</div>
</section>
</section>
<script src="../dev/js/jquery.min.js"></script>
<script src="../dev/js/jquery.cookie.js"></script>
<script src="../dev/js/common.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
<script>

        let data = {
            labels: ['<? echo $v0days; ?>','<? echo $v1days; ?>','<? echo $v2days; ?>','<? echo $v3days; ?>','<? echo $v4days; ?>'],
            datasets: [{
                label: 'Profit USD',
                data: [<? echo $fchartvalv; ?>],
                backgroundColor: [
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                ],
                borderColor: [
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                    '#22D7B6',
                ],
                borderWidth: 2,
            }]
        };
    
        let options = {
            responsive: true,
            cornerRadius: 20,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function (value, index, values) {
                            return '$ ' + value;
                        },
                        fontColor: '#ffffff',
                        fontSize: 13
                    },
    
                    gridLines: {
                        color: '#ffffff',
                        borderDash: [8, 8],
                        zeroLineColor: '#ffffff',
                        //  zeroLineBorderDash:  [8, 8],
                    }
    
                }],
                xAxes: [{
                    barPercentage: 0.5,
                    ticks: {
                        fontColor: '#9595A1',
                        fontSize: 13
                    },
                    gridLines: {
                        display: false,
                    }
                }]
            }
        };
    
        let ctx = document.getElementById('container').getContext('2d');
        let profitBar = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
        
   ////////////////////btc price ////


var btc = document.getElementById("bitcoinprice");

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "<? echo $btcpapi ?>",

    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function (response){
    btc.innerHTML = '$ '+response.bitcoin.usd + '<p style="color:red; fontSize:5px;opacity:0.4"> • Live</p>';
});
   /////////////////btc/////////////
   
    </script>
</body>
</html>