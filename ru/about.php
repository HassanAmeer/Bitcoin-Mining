
<?php

include '../config.php';
session_start();
// error_reporting(0);

$vstngs= "SELECT * FROM `ghstng` WHERE stngid=1";
 $vstngsq = mysqli_query($db,$vstngs);
$vstng = mysqli_fetch_assoc($vstngsq);


///////////////






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
<div class="aboutPage-bg">
<header class="header-content">
<div class="logo">
<a href="../ru.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li class="active"><a href="about.php">О нас</a></li>
<li><a href="package.php">Инвестиционные пакеты</a></li>
<li><a href="equipment.php">Оборудование</a></li>
<li><a href="referral.php">Реферальная Программа</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang ru">
ru
<ul>
<li>
<a href="../en/about.php" class="en">en</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Войти</a>
<a class="sign" href="register.php">Регистрация</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="aboutPage-titleBody">
<div class="aboutPage-title">
<h1>О GreenHashes</h1>
<p>GreenHashes открывает доступ к эко-майнингу всем желающим</p>
</div>
</div>
</div>
<section class="advantages-body">
<div class="content-box">
<h2><span>Услуги</span> которые мы продолжаем улучшать</h2>
</div>
<div class="content-box">
<div class="item">
<div class="info ico01">
<h3>Безопасность и конфиденциальность</h3>
<p>Мы представляем сервис майнинга, который обеспечивает большую степень конфиденциальности. В связи с этим, мы сводим сбор пользовательских данных к минимуму и отвечаем за безопасность данного сервера.</p>
</div>
</div>
<div class="item">
<div class="info ico02">
<h3>Экологически чистый продукт</h3>
<p>Для предлагаемой нами площадки мы обрели высокочаественное и экологически чистое оборудование для эффективность майнинг системы.</p>
</div>
</div>
<div class="item">
<div class="info ico03">
<h3>Мгновенные выплаты</h3>
<p>Доходы от вашего майнинга начисляются ежедневно с помощью автоматической системы выплат.</p>
</div>
</div>
<div class="item">
<div class="info ico04">
<h3>Стабильный доход</h3>
<p>Наличие регулярных выплат, разнообразие среди майнинг пакетов и легкий в использовании интерфей обеспечивают вам стабильный и пассивный доход.</p>
</div>
</div>
</div>
</section>
<section class="pageAbout-body">
<div class="info">
<div class="txt">
<h2>Облачный <span>майнинг</span></h2>
<p>Мы предаставляем услуги майнинга, в котором используется только энергия из возобновляемых источников.</p>
<p>При использовании нашего сервиса,наш пользователь получает возможность круглосуточного контроля своей прибыли, а компания в то время берет на себя все заботы по обеспечению безопасности и бесперебойной работы.</p>
<a href="package.html">Инвестировать</a>
</div>
</div>
</section>
<section class="aboutPage-workInfo">
<div class="title">
<h2>Вот как это работает</h2>
</div>
<div class="contentItem">
<div class="item ico01">
<h3>Создайте аккаунт</h3>
<p>Присоединяйтесь к нашему сообществу заполнив регистрационную форму.</p>
</div>
<div class="item ico02">
<h3>Ознакомтесь с нашими пакетами</h3>
<p>Ознакомтесь с нашими услугами. Каждый пакет имеет свое преимущество.</p>
</div>
<div class="item ico03">
<h3>Получайте стабильную прибыль</h3>
<p>Уже в течении 24 часов получите вашу первую прибыль после активации выбранного вами пакета.</p>
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
<li class="active"><a href="about.php">О нас</a></li>
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
>
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