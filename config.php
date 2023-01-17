<?

$db=mysqli_connect('localhost','getsellw_gh','Gh$786143','getsellw_gh');

if(!$db){echo "Data Base Not Connected"; }




// for test only after this deleted
// $qrcodeline = "1ETXyyRTpXSC8qcobmf8wC9ya9k5iSp6Ho";





$btcpapi = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Clitecoin%2Cethereum%2Cdogecoin&vs_currencies=usd";



///////for recive payments from block chain this things required to changed own
$secret = 'ZzsMLGKe162CfA5EcG6j';
$my_xpub = '{YOUR XPUB ADDRESS}';
$my_api_key = '{YOUR API KEY}';
//////////// end



/*
 $status_url = 'https://status.php';
 $success_url ='https://success.php';
 $fail_url = 'https://fail.php';
*/
?>