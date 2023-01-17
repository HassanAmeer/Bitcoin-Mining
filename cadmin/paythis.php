<?
include '../config.php';
session_start();

if (isset($_GET['bmoney'])) {
 $bitcoin = $_GET['bmoney'];
}else{
 $bitcoin = ' payments not set';
}

if (isset($_GET['walletis'])) {
    $wallet = $_GET['walletis'];
}else{
   $wallet = 'wallet not attached';
}

?>


<h1 style="color:orange"> Withdrawal by admin Page </h1>

<hr>

<b style="color:green"> Payments is ::::: B <? echo $bitcoin; ?></b>
<br>
<b style="color:indigo"> Wallet is ::::: <? echo $wallet; ?></b>




<br>
<br>
<h1 style="color:red"> Withdrawal Code In This Page </h1>










