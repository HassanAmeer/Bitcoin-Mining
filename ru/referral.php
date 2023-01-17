
<?php

include '../config.php';
session_start();
// error_reporting(0);

$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);


//////////////






?>


<!DOCTYPE html>
<html lang="ru">

<head>
<title>greenhashes</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<link rel="shortcut icon" href="../dev/img/fav.svg" type="image/x-icon">
<link href="../dev/css/main.min.css" rel="stylesheet">
</head>
<body>
<div class="referralPage-bg">
<header class="header-content">
<div class="logo">
<a href="../ru.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li><a href="about.php">О нас</a></li>
<li><a href="package.php">Инвестиционные пакеты</a></li>
<li><a href="equipment.php">Оборудование</a></li>
<li><a href="referral.php">Реферальная Программа</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang ru">
ru
<ul>
<li>
<a href="../en/referral.html" class="en">en</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Войти</a>
<a class="sign" href="register.php">Регистрация</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="referralPage-titleBody">
<div class="referralPage-title">
<h1>Реферальная Программа GreenHashes</h1>
<p>GreenHashes provides an all-in-one staking solution. Let us do the work, while you earn the rewards.</p>
</div>
</div>
</div>
<section class="referralPage-steps">
<div class="item">
<h2>шага к приятному бонусу</h2>
</div>
<div class="item">
<div class="step-item">
<div class="info step01">
<h4>Зарегистрируйтесь и приобретите пакет</h4>
<p>Заполните регистрационную форму и выберите подходящий для вас майнинг пакет.</p>
</div>
</div>
<div class="step-item">
<div class="info step02">
<h4>Поделитесь вашей реферальной ссылкой</h4>
<p>Вашему другу следует зарегистрироваться используя вашу реферальную ссылку. Перейдя по ссылке - заполните регистрационную форму.</p>
</div>
</div>
<div class="step-item">
<div class="info step03">
<h4>Посовейтуте другу пакет</h4>
<p>Наличие приобретенного пакета вашего друга, дает вам приятный бонус сразу после активации пакета.</p>
</div>
</div>
<div class="step-item">
<div class="info step04">
<h4>Получите бонус</h4>
<p>Теперь бонус у вас. И вы вместе с другом можете увеличить бонус, приобретая новые пакеты.</p>
</div>
</div>
</div>
</section>
<section class="referralPage-about">
<div class="info">
<h2>О реферальной программе</h2>
<p>Данная Реферальная программа была создана с целью поделиться с другом полезным.</p>
<p>Имея сообственный аккаунт, вы можете отправить свою реферальную ссылку с особым номером вашему другу. Который перейдя по ссылке может ознакомиться и зарегистрироваться на той же платформе. Далее вы сможете делать покупки вместе и повышать уровень реферальной программы и тем самым повышать свою прибыль.</p>
</div>
<div class="stat">
<div class="item">
<p>Всего рефералов</p>
<span>2300+</span>
</div>
<div class="item">
<p>Всего вознаграждений</p>
<span>$120 200</span>
</div>
</div>
</section>
<section class="fastStart-body">
<div class="fastStart-title">
<h3>Попробуйте GreenHashes прямо сегодня и получите уже первую прибыль в течении 24 часов</h3>
</div>
<div class="fastStart-form">
<form action="register.php" method="post">
<div class="form-content">
<input type="email" name="start_email" placeholder="Ваш электронный адрес">
<button type="submit"><span>Регистрация</span></button>
</div>
</form>
</div>
</section>
<div class="footer-bg">
<footer class="footer-content">
<div class="scroll-top"></div>
<section class="section1">
<div class="logo">
<a href="../ru.php"></a>
</div>
<nav class="navFooter-content">
<ul>
<li><a href="about.php">О нас</a></li>
<li><a href="package.php">Инвестиционные пакеты</a></li>
<li><a href="equipment.php">Оборудование</a></li>
<li><a href="referral.php">Реферальная Программа</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="auth-footer">
<a href="login.php">Войти</a>
<a class="sign" href="register.php">Регистрация</a>
</div>
</section>
<section class="section2">
<div class="s-block">
<div class="link-soc">
<a class="ico02" href="<? echo $vstng['instalink']; ?>" target="_blank"></a>
<a class="ico03" href="<? echo $vstng['tglink']; ?>" target="_blank"></a>
<a class="ico04" href="<? echo $vstng['fblink']; ?>" target="_blank"></a>
<a class="ico05" href="<? echo $vstng['twlink']; ?>" target="_blank"></a>
</div>
<div class="copy">
Copyright © 2022
<a href="privacy-policy.php">Privacy policy</a>
</div>
</div>
<div class="s-block">
<a href="mailto:<? echo $vstng['email']; ?>?subject=Greenhashes"><span class="__cf_email__" data-cfemail="">support@mail</span></a>
<p>Если у вас есть вопросы по услугам или предложения, напишите нам</p>
</div>
<div class="s-block">
<a href="<? echo $vstng['twlink']; ?>" target="_blank">Telegram Greenhashes</a>
<p>Присоединяйтесь к нашему телеграм-каналу, там много полезной информации о инвестициях</p>
</div>
</section>
</footer>
<span></span>
</div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../dev/js/jquery.min.js"></script>
<script src="../dev/js/jquery.cookie.js"></script>
<script src="../dev/js/common.min.js"></script>
</body>

</html>