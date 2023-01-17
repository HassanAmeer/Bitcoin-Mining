
<?
include '../config.php';
session_start();
 error_reporting(0);
if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); 
}

if(isset($_POST['logoutbtn']))
{
  unset($_SESSION['adminses']);
  header('location:../index.php');
}
/////////////////////////////////
/**********************************/
$thistime = date('d/m/Y H:i:s a', time());
$cusrs = " SELECT COUNT(uid) AS totalusrs FROM `userslog`";
$cusrsq = mysqli_query($db,$cusrs);
$cusrsv = mysqli_fetch_assoc($cusrsq);
///// end of count total users

$tsums = " SELECT SUM(totalsum) AS tusrsumbal FROM userslog";
$tsumsq = mysqli_query($db,$tsums);
$tsumsv = mysqli_fetch_assoc($tsumsq);
///// start count total sums
$tusrsumout = "SELECT SUM(totalsumout) AS tusrsmout FROM userslog";
$tusrsumoutq=mysqli_query($db,$tusrsumout);
$tumoutsv=mysqli_fetch_assoc($tusrsumoutq);
///// start count total Withdraw

$tusringame =$cusrsv['totalusrs'];
$tsumingame = $tsumsv['tusrsumbal'];
 $tusoutgame = $tumoutsv['tusrsmout'];
$totalprof = $tsumingame - $tusoutgame;








/*
$chkstng = "SELECT * FROM `allstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
///////////////
*/

///////////////
$chkstng = "SELECT * FROM `ghstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
///////////////


?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.4">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title> Панель администратора </title>
  </head>
  <body>


<style>
.navadscolor{
  color:navy;background: rgb(227,190,254); letter-spacing: :1px; font-style: bold;
}
.navbitcoin{
  animation: navbitcoin 4s infinite;
}
@keyframes navbitcoin
{
  10%{
   opacity: 0.2; margin-left: 1em;
  }
  80%{
   opacity: 1; margin-left: 0em;
  }
}

  /* for table golden star and silver */
      
      
 table.edTable { width: 100%; font: 17px calibri; } table, table.edTable th, table.edTable td { border: solid px #9b58b5; border-collapse: collapse; padding: 3px; text-align: center; } table.edTable td { background-color: #5c0e80; color: #ffffff; font-size: 14px; } table.edTable th { background-color : #b02875; color: #ffffff; } tr:hover td { background-color:navy; color: #dddddd; }
 
      
/*  own */
.silTable{
  width: 100%;

  
}
.sthead{
  background: silver;
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.sthead th{
  color:green;
  font-size: 1em;
}
.gthead{
  background:rgb(203,149,6);
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.gthead th{
  color:indigo;
  font-size: 1em;
}
.strowdata td{
  font-size: 0.8em;
  
}
.strowdata:hover { letter-spacing:1px; }
.strowdata:hover td i{ color:#05cecd; }
.strowdata td i{
  width: 1em;
  color:indigo;
}
/* end of golden star table */
#listtable{
    width: 100%;
    height: 80%;
    overflow-x: auto; 
    overflow-y: auto; 
    height: 82em;
 }      

</style>



<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
     <i class="fas fa-user-tie text-info"> </i> 
      <? echo $_SESSION['adminses']; ?>
    </a>
<button class="float-end bg-dark navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>







<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
   <i class="fas fa-user-tie text-info"> </i> 
    <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel"><? echo $_SESSION['adminses']; ?></h5>
    <button type="button" class=" btn-close btn-close-white text-light" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
  </div>
  <div class="offcanvas-body">
    <div class="text-light">
    Управление зелеными хэшами    </div>
    <hr class="bg-light">
    <div class="dropdown mt-3">
      <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        <i class="fa fa-recycle text-white"> </i> Сбросить проекты
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" id="fulresetbtn"> Полная информация о выводе средств + другие</a></li>
        <li><a class="dropdown-item" id="allpkgresetbtn"> Only buyer Packeges Reset(removed)</a></li>
       <u class="text-muted">действие на всех учетных записях пользователей <i class="fa fa-warning text-danger"> </i> <b class="text-danger"> Осторожно </b></u>
      </ul>
    </div>
   <br>
   <br>
   <br>
   <br>
   <br>
    
<div class="d-grid gap-2">
  <button class="btn btn-success navbtns navdboardbtn" type="button"><i class="fa fa-dashboard text-white"> </i>Приборная доска</button>
  <button class="btn btn-success navbtns navmailbtn" type="button"><i class="fa fa-paper-plane text-white"> </i> Отправлять электронную почту</button>
  <button class="btn btn-success navbtns navpresbtn" type="button"><i class="fa fa-bitcoin text-warning navbitcoin"> </i>Предпродажа</button>
  <button class="btn btn-success navbtns navusrslistbtn" type="button"><i class="fa fa-users text-white"> </i> Учетные записи пользователей</button>
  <button class="btn btn-success navbtns navreqwithdrawbtn" type="button"><i class="fa fa-history text-white"> </i> Запрос на вывод средств</button>

</div>



  <form method="post">
 <div class="d-grid gap-2" style="position:absolute; bottom:0;width:90%;text-align:center;">
  <button type="submit" name="logoutbtn" class="btn btn-danger"> Выйти  <i class="fa fa-arrow-right text-white"></i> </button>
   </div>
</form>


  </div>
</div>
   <br>
   <br>
  <!----------------------------------------------------------------------------------------------------- start js divs ----------------------------------------------------------------------------------------------------->
  
  
<div id="errors" class="alert notifycross" style="display:none;background:#fdb0b0f0; color:red; border-radius:20px; border:1px solid red; box-shadow:2px 2px 14px 2px black;font-size:2em; position:absolute;z-index:100;top:500px;" role="alert">
   </div>
 
 <!---------------------------------->
 <!---------------------------------->

 <div id="successrs" class="alert alert-success notifycross" style="display:none;color:green;border-radius:20px; border:1px solid green;font-size:2em; box-shadow:2px 2px 14px 2px black;position:absolute;z-index:100;top:500px;" role="alert">
</div>
 <!---------------------------------->
  
  
  
  <center>
   <div id="dashboarddiv">
     
    <div style="display:flex;flex-direction:row; width:90%">
     
      <div class="bg-primary p-2" style="width:50%;box-shadow:2px 2px 20px black;">
        <u class="text-white"> <i class="fa fa-history text-warning"> </i> Время входа</u>
        <hr class="p-1">
         <h3 class="text-white"> <? echo $thistime; ?></h3>
    <p class="text-warning"> <? echo $_SERVER['REMOTE_ADDR']; ?></p>
       </div>
       
      <div class="bg-warning p-2" style="width:50%;">
        <u class="text-white"> <i class="fas fa-sack-dollar text-primary">  </i> Состояние баланса </u>
        <hr class="p-1">
         <h3 class="text-white"> <? echo $totalprof; ?>  <i class="fa fa-dollar text-primary"> </i></h3>
       <p class="text-muted"> остаток от общей суммы и суммы </p>
       </div>
     </div>
     
    <br>
    <br>
    <br>
   <div class="container">
      <!-- single canvas node to render the chart -->
      <canvas
        id="myChart"
        width="700"
        height="700"
        aria-label="chart"
        role="img"
      ></canvas>
    </div>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 <h1 class=" text-success" style="border:1px solid green;box-shadow:1px 1px 15px black; border-radius:10px; background:#c0fcadb2; text-align:center;"> Настройки сайта</h1> 

 <div class="" style="background:#e1f2e0;"><center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">1. Контактные ссылки</h1>
    <div id="vlinks"> </div><hr>
     </center>
   </div>
   
   

<div class="" style="background:#e1f2e0;">
     <center>
     
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">2. На этот раз все выплаты <i class="float-end fa fa-gear text-primary"> </i></h1>
    <div style="font-size:2em;">
    
   <select id="wbalidonofv" style="background:navy;color:lime;" onchange="allsmoutonoff(this.options[this.selectedIndex].value)">
      <option value="0"> ON </option>
      <option value="1"> OFF </option>
    </select>
    </div>
<hr>
     </center>
   </div>
   
   
<div class="" style="background:#e1f2e0;">
<center>
     
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">3. Обновить контактные ссылки <i class="float-end fa fa-gear text-primary"> </i></h1>
    
  <input type="text" placeholder=" Telegram Ссылка на сайт" id="tglink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder=" Instagram Ссылка на сайт" id="instalink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder="Facebook Ссылка на сайт" id="fblink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder=" Twitter Ссылка на сайт" id="twitterlink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder=" Gmail " id="gmaillink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">

<button class="btn btn-primary setlinksbtn" style="letter-spacing:4px;">Обновить ссылки</button>
  <hr>
     </center>
   </div>
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">4. Обновить курс BTC в долларах США для снятия средств <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted">Может установить собственную цену </p>
  <p class="text-primary">Уже установленная цена : <b class="text-danger" id="btcratev"> 30100 </b> $</p>
  <input type="text" placeholder=" BTC курс" id="btcrateinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary btcratebtn" style="letter-spacing:4px;">Обновить курс BTC в долларах США</button>
<hr>
     </center>
   </div>
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">5. Административный контроль <i class="float-end fa fa-gear text-primary"> </i></h1>
 
  <input type="text" placeholder=" Имя администратора" id="admnname" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder=" Пароль администратора" id="admnpass" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary admnpassbtn" style="letter-spacing:4px;">Управление обновлениями</button>
     </center>
   </div>
   
   
   
    
    
    
    
    
    
    
    
   </div>
</center>

<!-----2.------------------------------------------------------------------------------------------------>

<!------ start of mail divs -------->
<div id="mailsdiv" style="display:none;">
  <center>
   <h3 class="" style="color:#016dbdd5">1. Отправить письмо всем / или 1 человеку </h3>
  <b style="color:green;"> Если хотите отправить все письма, не нужно вводить почту, нажмите кнопку для всех (письма выбраны из базы данных)</b></br>

  
 <input type="text" placeholder="Тема здесь" id="sbjctmail1" style="border: 1px solid rgb(0,87,107); outline:none; color:rgb(0,87,107); font-size:2em;"><br><br>
  <textarea type="text" placeholder="Основное сообщение здесь" id="msgmail1" style="border: 1px solid navy; outline:none; color:navy; font-size:1em;width:80%;height:8em;"></textarea><br><br>
  <button class="btn btn-danger sndmailallbtn"> Отправить всем </button><br>
  <br>
  <br>
  <br>
  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px brown; background:silver;">
<!----------------------------->
  <b class="text-success">2. Кому Только один человек получает электронную почту от учетных записей пользователей для отправки почты</b>
  
  <input type="text" value="From : <? echo $chkstngv['email']; ?>" style="border: 1px solid red; outline:none; color:red; font-size:2em;" disabled=""><br><br>

  <input type="text" placeholder="Email К" value="To@gmail.com" id="mailto" style="border: 1px solid green; outline:none; color:green; font-size:2em;"><br><br>
  <input type="text" placeholder="Subject Здесь" id="sbjctmail" style="border: 1px solid rgb(0,87,107); outline:none; color:rgb(0,87,107); font-size:2em;"><br><br>
  <textarea type="text" placeholder="Основное сообщение здесь" id="msgmail" style="border: 1px solid navy; outline:none; color:navy; font-size:1em;width:80%;height:8em;"></textarea><br><br>
  <button class="btn btn-success sndmail1btn">отправить только сюда</button><br><br>

</center>
</div>
<!------ end of mail divs -------->
   
<!-----3.------------------------------------------------------------------------------------------------>
  <div class="" id="presalediv" style="display:none">
<h1 class="text-success">Установить собственную стоимость для предпродажного пакета</h1>
<center><p class="text-muted"><i class="fa fa-info text-danger"> </i>  обновление в соответствии с предоставленным бонусом </p></center>

 <div class="row row-cols-1 row-cols-md-3 g-2" id="vpresalejs"></div>
 
 <center>
  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy, 3px 3px 11px 4px blue; background:aqua;"> 
 <b class="text-primary" style="font-size:2em"><mark id="voferdate"> </mark> дни <i class="fa fa-history text-muted"> </i></b> || 
 <input type="text" placeholder="Время предложения в днях" id="setoferdays" style="border-radius:15px; border:1px solid green; outline:none; font-size:2em;color:green;">
   
  <button class="btn ofertimebtn" style="border-radius:15px; font-size:1.7em; background:black;color:lime;"> Обновлять </button>  
 <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy, 3px 3px 11px 4px blue; background:aqua;"> 
</center>
 
  </div>
<!-----4.------------------------------------------------------------------------------------------------>
<!----end of setting div--->
<div id="usrslistdiv" style="display:none;">
  <center><h3 class="" style="color:indigo;"> списки учетных записей пользователей <u class="text-success"> Amounts In $</u></h3>
<div id="listtable">
   <!-- start here for Silver stars users -->
 <table class="silTable" id="sTab" style="width:180%;">
<tbody class="vbandusrs">
  <tr class="sthead">
	<th>id</th>
	<th>Email</th>
	<th>Всего инвестировать</th>
	<th>суммировать</th>
	<th>Всегосумаут</th>
	<th>buy_pkgs</th>
	<th>ссылаться на</th>
	<th>Всего реф</th>
	<th>реферальный уровень</th>
	<th>реф бонус</th>
	<th>Айпи адрес</th>
  </tr>
  </tbody>
  
  <tbody class="tablesvall"> </tbody>
  
  
</table> 
</div>
  
  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px brown; background:silver;">

<p class="text-primary"> Запретить только снятие средств от конкретного человека </p>
<b class="text-danger">просматривать любые пакеты пользователей, которые покупаются</b>
<b class="text-success">0 или имя пакета, +другие </b>

  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px lime; background:white;">


  </center>
</div>
<!------ end of list div ------->

<!-----5.------------------------------------------------------------------------------------------------>
<!------ start of request withdraw tables -------->
<div id="reqwithdrawdiv" style="display:none;">

<h4 class="text-danger">Таблица запросов на вывод биткойн-денег</h4>
<div id="listtable">
 <table class="silTable" id="sTab" style="width:180%;">
<tbody class="vbandusrs">
  <tr class="sthead">
	<th>id_No</th>
	<th>From_User</th>
	<th>request_withdrawal</th>
	<th>TO_Wallet</th>
	<th>Send_?</th>
	<th>Status_?</th>
	<th>req_Time</th>
	<th>before_req_balance_$</th>
	<th>Total_Sumouts</th>
	<th>Total_Reffers</th>
  </tr>
  </tbody>
  
  <tbody class="vreqwithdrawal"> </tbody>
</table>
</div>
<center>
<hr class="bg-danger p-1">
    <h2 class="fa fa-info-circle text-denger" style="color:red"> При отправке платежа пользователям, затем статус «Оплачен» изменяется с помощью кнопки </h2>
    <p class="text-success">1.если статус проверен в порядке, то он не отображается для пользователя при блокировке снятия средств</p>
    <p class="text-danger">2. если статус не проверен, то его отображение для пользователя при снятии средств заблокировано до оплаты администратором </p>
</center>
</div>
<!------ end of request of withdraw table div -------->























<!-----6.------------------------------------------------------------------------------------------------>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="js/chart.js"></script>

  <script>
 ///////// get data 

 
 
function sociallinks(){
    $.post(
      "byajax.php",
      {sociallinkjs:'jxdjjdk'},
      function(socialvf){
      $("#vlinks").html(socialvf);
      }
    ); // end post
}    
//////////////////
function vusrstblf(){
    $.post(
      "byajax.php",
      {vusrstbljs:'icidu'},
      function(vusrstblfj){
      $(".tablesvall").html(vusrstblfj);
      }
    ); // end post
}    
//////////////////
//////////////////
function voferdatef(){
    $.post(
      "byajax.php",
      {voferdatjs:'jfjrdj'},
      function(voferdatf){
      $("#voferdate").html(voferdatf);
      }
    ); // end post
}    
//////////////////
//////////////////
function vusrsreqoutbl(){
    $.post(
      "byajax.php",
      {vusrsreqj:'bdhdh'},
      function(vusrsreqf){
      $(".vreqwithdrawal").html(vusrsreqf);
      }
    ); // end post
}    
//////////////////
function vpresalef(){
    $.post(
      "byajax.php",
      {vpresaljs:'dxjud'},
      function(vpresalf){
      $("#vpresalejs").html(vpresalf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vbtcratf(){
    $.post(
      "byajax.php",
      {vbtcratjs:'hdjdjfufu'},
      function(btcratfv){
  $("#btcratev").html(btcratfv);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vwbalonoff(){
    $.post(
      "byajax.php",
      {vwbalonofjs:'djjdje'},
      function(vwbalonof){
      var onofwbal = vwbalonof;

  if(vwbalonof==0){
$("#wbalidonofv option[value='0']").prop('selected',true);}else{
$("#wbalidonofv option[value='1']").prop('selected',true);
}
      }
    ); // end post
}    
//////////////////
 function allsmoutonoff(value)
  {   var valonoff = value;
      $.post(
      "byajax.php",
      {valuejs:valonoff},
      function(smoutonof){
       if(smoutonof == 1){
        $("#successrs").fadeIn();
          $("#successrs").html('√  Успешно обновлено'); 
            vwbalonoff();
        }else if(smoutonof == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Что-то пошло не так');
      }  }); // end post
  }
/////////////start for links update
//////////////////////////////
 $(document).on('click','.setlinksbtn',function(){
  var tglink = $('#tglink').val();
   var instalink = $('#instalink').val();
   var fblink = $('#fblink').val();
   var twtrlink = $('#twitterlink').val();
   var gmalink = $('#gmaillink').val();
      $.post(
      "byajax.php",
      {tglinkjs:tglink,instalinkjs:instalink,fblinkjs:fblink,twtrlinkjs:twtrlink,gmalinkjs:gmalink},
       function(updatlnks){
       if(updatlnks == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  Успешно обновлено ');
      
      $('#twitterlink').val("");
      $('#gmaillink').val("");
      $('#fblink').val("");
      $('#instalink').val("");
      $('#tglink').val("");
       
       
       
        sociallinks();
        }else if(updatlnks == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Что-то пошло не так');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.btcratebtn',function(){
  var btcrateinpt = $('#btcrateinpt').val();
      $.post(
      "byajax.php",
    {btcrateinptjs:btcrateinpt},
       function(btcrateinptf){
       if(btcrateinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ Успешно обновлено ');
       $('#btcrateinpt').val("");
        vbtcratf();
       }else if(btcrateinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Что-то пошло не так');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.ofertimebtn',function(){
  var setoferdays = $('#setoferdays').val();
      $.post(
      "byajax.php",
    {setoferdaysjs:setoferdays},
       function(setoferdaysf){
       if(setoferdaysf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ Успешно обновлено');
       $('#setoferdays').val("");
        voferdatef();
       }else if(setoferdaysf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Что-то пошло не так');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.admnpassbtn',function(){
  var admnname = $('#admnname').val();
  var admnpass = $('#admnpass').val();
      $.post(
      "byajax.php",
    {adminamjs:admnname, adminpassjs:admnpass},
       function(admnsetsf){
       if(admnsetsf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ Успешно обновлено ');
       }else if(admnsetsf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Что-то пошло не так');
      }  }); // end post
  })
////////////////// end page1
  
/////////////single person mail ///////////////
 $(document).on('click','.sndmail1btn',function(){
   var mailto = $('#mailto').val();
   var sbjctmail = $('#sbjctmail').val();
   var msgmail = $('#msgmail').val();
      $.post(
      "byajax.php",
      {mailtoj:mailto,sbjctmailj:sbjctmail,msgmailj:msgmail},
       function(sndmail1btnf){
       if(sndmail1btnf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ почта успешно отправлена ​​на этот ' + mailto);
     }else if(sndmail1btnf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Письмо не отправляется попробуйте еще раз');
      }  }); // end post
  })
///////////////////////////////
  
/////////////single person mail ///////////////
 $(document).on('click','.sndmailallbtn',function(){
   var sbjctmail = $('#sbjctmail1').val();
   var msgmail = $('#msgmail1').val();
      $.post(
      "byajax.php",
      {sbjctmailall:sbjctmail,msgmailall:msgmail},
       function(sndmailallf){
       if(sndmailallf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√почта успешно отправлена');
     }else if(sndmailallf == 0){
       $('#errors').fadeIn();
       $("#errors").html('×Письмо не отправляется попробуйте еще раз');
      }  }); // end post
  })
///////////////////////////////
/////////////single person mail ///////////////
 $(document).on('click','#allpkgresetbtn',function(){

      $.post(
      "byajax.php",
      {allpkgresetj:'ueuejfj'},
       function(allpkgrstf){
       if(allpkgrstf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Removed All packeges Of Users');
     }else if(allpkgrstf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× try again');
      }  }); // end post
  })
///////////////////////////////
/////////////single person mail ///////////////
 $(document).on('click','#fulresetbtn',function(){

      $.post(
      "byajax.php",
      {fulresetjs:'dhueuw8'},
       function(fulrstgamf){
       if(fulrstgamf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ успешно сбросить все данные пользователя, но скрытые данные, которые вы можете видеть');
     }else if(fulrstgamf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Попробуйте еще раз');
      }  }); // end post
  })
///////////////////////////////
 
$(document).on('click','.setpresvalbtn',function()
{
  var salename = $(this).data("sale");
  var strike = $(this).data("strike");
if(salename=="sale1")
{
  var prescutval = $('#prescut1').val();
  var presvalv = $('#presvalv1').val();
}else if(salename=="sale2"){
 var prescutval = $('#prescut2').val();
  var presvalv = $('#presvalv2').val();
}else if(salename=="sale3"){
 var prescutval = $('#prescut3').val();
  var presvalv = $('#presvalv3').val();
}else if(salename=="sale4"){
 var prescutval = $('#prescut4').val();
  var presvalv = $('#presvalv4').val();
}else if(salename=="sale5"){
 var prescutval = $('#prescut5').val();
  var presvalv = $('#presvalv5').val();
}else if(salename=="sale6"){
 var prescutval = $('#prescut6').val();
  var presvalv = $('#presvalv6').val();
}else if(salename=="sale7"){
 var prescutval = $('#prescut7').val();
  var presvalv = $('#presvalv7').val();
}else if(salename=="sale8"){
 var prescutval = $('#prescut8').val();
  var presvalv = $('#presvalv8').val();
}

 $.post(
      "byajax.php",
      {salejs:salename,strikejs:strike,presvalvjs:presvalv,prescutvaljs:prescutval},
       function(strikef){
       if(strikef == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  Успешно обновлено');
         vpresalef();
     }else if(strikef == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Что-то пошло не так');
      }  }); // 

})
///////////////////////////////
 
$(document).on('click','.slctbanjs',function()
{
  var usrbanval = $(this).data("usrbanval");
  var usrtblid = $(this).data("usrtblid");

 $.post(
      "byajax.php",
      {usrbanvaljs:usrbanval,usrtblidjs:usrtblid},
       function(usrbanf){
       if(usrbanf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  Успешно обновлено');
         vusrstblf();
     }else if(usrbanf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Что-то пошло не так');
      }  }); // 

})
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
///////////////////////////////
 
$(document).on('click','.reqchangbtn',function()
{
  var reqid = $(this).data("reqid");
  var reqstatus = $(this).data("reqstatus");

 $.post(
      "byajax.php",
      {reqidjs:reqid,reqstatusjs:reqstatus},
       function(reqchangf){
       if(reqchangf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  Успешно обновлено');
         vusrsreqoutbl();
     }else if(reqchangf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Что-то пошло не так');
      }  }); // 

})
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
/////////////////////////////////
/////////////////////////////////
$(document).on('click','.navbtns',function(){
$(this).siblings().removeClass('navadscolor');
$(this).addClass('navadscolor');

});
//////////////////////////////////
   /////////////////////////////////////
  $(document).on('click','.notifycross',function(){
      $('#errors').hide(100);
      $('#successrs').hide(100);
    })
//////////////////////////////////
/////////////////////////////////////////
  $(document).on('click','.navdboardbtn', function(){
    $('#dashboarddiv').show();
    $('#mailsdiv').hide();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
   
  }) 
//////
  $(document).on('click','.navmailbtn', function(){
    $('#mailsdiv').show();
    $('#dashboarddiv').hide();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
   
  }) 
//////
  $(document).on('click','.navpresbtn', function(){
    $('#presalediv').show();
    $('#mailsdiv').hide();
    $('#dashboarddiv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
   
  }) 
//////
  $(document).on('click','.navusrslistbtn', function(){
    $('#presalediv').hide();
    $('#usrslistdiv').show();
    $('#mailsdiv').hide();
    $('#dashboarddiv').hide();
    $('#reqwithdrawdiv').hide();
   
  }) 
//////
  $(document).on('click','.navreqwithdrawbtn', function(){
    $('#presalediv').hide();
    $('#reqwithdrawdiv').show();
    $('#usrslistdiv').hide();
    $('#mailsdiv').hide();
    $('#dashboarddiv').hide();
   
  }) 
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//// chart 
var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {

  type: "bar",
  data: {
    // Data Labels
    labels: ["Всего пользователей", "Итого", "Общая сумма"],

    datasets: [
      // Data Set 1
      {
        //  Chart Label
        label: "performance",

        // Actual Data
        data: [<? echo $tusringame ?> , <? echo $tsumingame ?>, <? echo $tusoutgame ?>],

        // Background Color
        backgroundColor: [
        "rgba(54, 162, 235, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 99, 132, 0.2)",
        ],

        // Border Color
        borderColor: [
          "rgba(54, 162, 235, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(255, 99, 132, 1)",
           ],

        // Border Width
        borderWidth: 1,
      },

    ],
  },

  options: {
 
    responsive: false,

    layout: {
      padding: {
        left: 50,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },

    tooltips: {
      enabled: true,
      backgroundColor: "black", // 
      titleFontFamily: "Comic Sans MS",
      titleFontSize: 30, // Set Tooltip Font Size
      titleFontStyle: "bold italic",
      titleFontColor: "yellow",
      titleAlign: "center",
      titleSpacing: 3,
      titleMarginBottom: 50,
      bodyFontFamily: "Comic Sans MS",
      bodyFontSize: 20,
      bodyFontStyle: "italic",
      bodyFontColor: "silver",
      bodyAlign: "center",
      bodySpacing: 3,
    },

    // Custom Chart Title
    title: {
      display: true,
      text: "Project Statics With USD",
      position: "bottom",
      fontSize: 25,
      fontFamily: "Comic Sans MS",
      fontColor: "green",
      fontStyle: "bold italic",
      padding: 20,
      lineHeight: 5,
    },

    // Legends Configuration
    legend: {
      display: true,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "navy",
        fontSize: 16,
        boxWidth: 20,
      },
    },

    animation: {
      duration: 7000,
      easing: "easeInOutBounce",
    },
  },
});
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
////// windows loads
window.onload = sociallinks();
window.onload = vwbalonoff();
window.onload = vbtcratf();
window.onload = vpresalef();
window.onload = vusrstblf();
window.onload = vusrsreqoutbl();
window.onload = voferdatef();




  </script>
    
    
    
    
  </body>
</html>