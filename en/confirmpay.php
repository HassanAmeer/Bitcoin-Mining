<?

include '../config.php';
session_start();
 error_reporting(0);

/*
any things you want can uncomment

$real_secret = 'ZzsMLGKe162CfA5EcG6j';
$transaction_hash = $_GET['transaction_hash'];
$value_in_satoshi = $_GET['value'];
$value_in_btc = $value_in_satoshi / 100000000;
*/

if($_GET['secret'] != $secret))
{ header('location:../index.php');
}
if(!isset($_GET['invoice_id']))
{ header('location:../index.php');
}

$invoice_id = $_GET['invoice_id']; 

// its for test only $invoice_id = '628eea15ca3d9'; 
//invoice_id is passed back to
//Commented out to test, uncomment when live

$checkorderid= "SELECT * FROM `orderhis` WHERE orderid='$invoice_id'";
 $checkorderidq = mysqli_query($db,$checkorderid);
$byuserv = mysqli_fetch_array($checkorderidq);
 $thisid = $byuserv['orderid'];
///////////////

if($byuserv['status'] == 1)
{ header('location:../index.php');
} 
// for check if return id after successful payments is true 
if($invoice_id == $thisid) {
  
  //// its for ok user pay then status show success
  $setokpay = "UPDATE `orderhis` SET `status`=1 WHERE orderid='$invoice_id'";
  $setokpayq = mysqli_query($db,$setokpay);
  /////////
  
 $foid = $byuserv['orderid'];
 $fbyusr = $byuserv['byuser'];
 $fpkgn = $byuserv['pkgname'];
 $fpno = $byuserv['plansno'];
 $fbtcpay = $byuserv['btcpay'];
 $fbinusd = $byuserv['btcinusd'];
 $fdprofi=$byuserv['dailyprofit'];
 $ftdays = $byuserv['days'];
  
  
  $strtime = time();
  $endtims =  84600 * $ftdays;
  $endtime = $strtime + $endtims;
  
  $toactive = "INSERT INTO `activepkg`( `by_orderid`, `byuser`, `starttime`, `endtime`, `pkgname`, `plansno`, `investbtc`, `investinusd`, `dailyprofitusd`,`howdays`) VALUES ('$foid','$fbyusr','$strtime','$endtime','$fpkgn','$fpno','$fbtcpay','$fbinusd','$fdprofi','$ftdays')";
  
   $toactiveq = mysqli_query($db,$toactive);
   
   
   ///// for reffer bonus 
/////////////////////
$forreff= "SELECT * FROM `userslog` WHERE uemail='$fbyusr'";
 $forreffq = mysqli_query($db,$forreff);
$forrefv = mysqli_fetch_assoc($forreffq);
$buyerspkgset = $forrefv['buy_pkg'].','.$fpkgn.'_'.$fpno;
/////////////////////
  $totalinv = "UPDATE `userslog` SET buy_pkg='$buyerspkgset', `totalsum`=totalsum+'$fbinusd' WHERE uemail = '$fbyusr'";
  $totalinvq = mysqli_query($db,$totalinv);
////////



if($forrefv['refby'] > 0)
{
 $bythisref = $forrefv['refby'];
 $checklvl= "SELECT * FROM `userslog` WHERE uid='$bythisref'";
 $checklvlq = mysqli_query($db,$checklvl);
$checklvlv = mysqli_fetch_assoc($checklvlq);

   
    
  if($checklvlv['reflevel'] == 0)
  { $bonus = $fbinusd/100*5;
   $setbonus = "UPDATE `userslog` SET `sumout`=sumout+'$bonus',`reflevel`=reflevel+1,`refbonus`=refbonus+'$bonus' WHERE uid='$bythisref'";
   mysqli_query($db,$setbonus);
  }elseif($checklvlv['reflevel'] == 1){
   $bonus = $fbinusd/100*3;
   $setbonus = "UPDATE `userslog` SET `sumout`=sumout+'$bonus',`reflevel`=reflevel+1,`refbonus`=refbonus+'$bonus' WHERE uid='$bythisref'";
   mysqli_query($db,$setbonus);
  }elseif($checklvlv['reflevel'] == 2){
     $bonus = $fbinusd/100*1;
   $setbonus = "UPDATE `userslog` SET `sumout`=sumout+'$bonus',`reflevel`=reflevel+1,`refbonus`=refbonus+'$bonus' WHERE uid='$bythisref'";
    mysqli_query($db,$setbonus);
  }
  /////// end add bonus

}
//////// wnd chwck level
}
////// end all











?>