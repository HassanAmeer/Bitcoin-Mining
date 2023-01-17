<?

include '../../config.php';
session_start();
 error_reporting(0);
if(!isset($_SESSION['loginses']))
{ exit; }
//////////////
$byuser = $_SESSION['loginses'];
//////////////
$vseslog= "SELECT * FROM `userslog` WHERE uemail='$byuser'";
 $seslogq = mysqli_query($db,$vseslog);
$seslogv = mysqli_fetch_assoc($seslogq);
$mainbal = $seslogv['sumout'];
$tsumout =$seslogv['totalsumout'];
$trefers = $seslogv['totalref'];
$user_ban = $seslogv['user_ban'];

///////////////
//////////////for check settings 
$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);
$btcrate=$vstng['setbtcrate_usd'];
$withdra_off = $vstng['withdrawoff'];

///////////////



///////////////////////////
///////////////////////////
if(isset($_POST['usrinvst']))
{ echo $seslogv['sumout']; }
///////////////////////////
///////////////////////////
if(isset($_POST['exchginptjs']))
{
  $exchginpt = mysqli_real_escape_string($db,$_POST['exchginptjs']);
 
if($exchginpt > $seslogv['sumout'] || $exchginpt < 1)
 {  echo 2; }else{
$exchgbal="UPDATE userslog SET sumout=sumout-'$exchginpt' WHERE uemail='$byuser'";
  $exchgbalq = mysqli_query($db,$exchgbal);
 if($exchgbalq){
   /////
 $slctper = "SELECT SUM(dailyprofitusd) AS prdayprof, SUM(investinusd) as totlinvest FROM `activepkg` WHERE byuser='$byuser'";
  $slctperq = mysqli_query($db, $slctper);
 $slctperv = mysqli_fetch_assoc($slctperq);
   
 $tperpkg = $slctperv['prdayprof'] / $slctperv['totlinvest'] * 100;

 $fnlper = $exchginpt/100 * $tperpkg;
   
   /////start
$clctnobuy = " SELECT COUNT(by_orderid) AS trowusr FROM `activepkg` WHERE byuser ='$byuser'";
$clctnobuyq = mysqli_query($db,$clctnobuy);
$vnobuy = mysqli_fetch_assoc($clctnobuyq);
   ///// end

////
  $setpercinpkg = $fnlper / $vnobuy['trowusr'];
 /////
$fnlsetprpkg = "UPDATE `activepkg` SET `dailyprofitusd`=dailyprofitusd+'$setpercinpkg'  WHERE byuser = '$byuser'";
 $forvscs = mysqli_query($db,$fnlsetprpkg); 
 if($forvscs)
 {echo 1;} else { echo 0; } 
 
   
 }
 }
}


//////////////////for withdraw request ////////

if(isset($_POST['withdwaletjs']))
{
  $wbalinpt = mysqli_real_escape_string($db,$_POST['withdinptjs']);
  
  $wbalwalet = mysqli_real_escape_string($db,$_POST['withdwaletjs']);
   
    $usdtobtc = 1/$btcrate * $seslogv['sumout'];

/////// for check if enter higher amounts in btc 
 if($wbalinpt > $usdtobtc)
 {
   echo 2;
 }else{
   $oneusd = 1/$btcrate;
   $cutbal = $wbalinpt/$oneusd;
  if($withdra_off==1 || $user_ban ==1 )
   { echo 3; }else{
 $setreq="UPDATE userslog SET  sumout=sumout-'$cutbal' totalsumout=totalsumout+'$cutbal' WHERE uemail='$byuser'";
  $setreqq = mysqli_query($db,$setreq);
   if($setreq)
   {
    $reqtoadmin = "INSERT INTO `req_withdrawl`(`from_user`, `req_withdraw`, `wallet`, `mainbal`, `total_out`, `total_ref`, `status`) VALUES ('$byuser','$wbalinpt','$wbalwalet','$mainbal','$tsumout','$trefers','0')";
     $reqtoadmq = mysqli_query($db,$reqtoadmin);
     if($reqtoadmq)
     { echo 1; }
    }
   } // end check ban
 } // end else greatest
}
////////////////// end for withdraw request ////////

////////////////// for show withdraw locked ////////
if(isset($_POST['forvwbalock']))
{
$vwithdlock= "SELECT * FROM `req_withdrawl` WHERE from_user='$byuser' AND status=0";
 $vwithdlockq = mysqli_query($db,$vwithdlock);
while($withdlockv = mysqli_fetch_array($vwithdlockq))
{
echo $withdlockv['req_withdraw'].'  BTC<br> ';
}
}
//////////////////end for show withdraw locked ////////










