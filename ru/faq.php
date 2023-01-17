

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
<div class="faqPage-bg">
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
<li class="active"><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang ru">
ru
<ul>
<li>
<a href="../en/faq.php" class="en">en</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Войти</a>
<a class="sign" href="register.php">Регистрация</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="faqPage-titleBody">
<div class="faqPage-title">
<h1>FAQ</h1>
<p>Здесь мы постарались ответить на часто задаваемые вопросы, пожалуйста ознакомьтесь.</p>
</div>
</div>
</div>
<section class="faqPage-content">
<div class="info">
<div class="faq-item">
<div class="faq-title">
<h3>1. Как начать майнинг с GreenHashes?</h3>
<span></span>
</div>
<p>Прежде всего ознакомтесь с правилами пользования нашей компании, пройдите простую регистрацию и ознакомьтесь с действующими пакетами.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>2. Как приобрести пакет?</h3>
<span></span>
</div>
<p>Вам необходимо выбрать пакет, который вас интересует и следовать указанием сайта, для оплаты пакеты вам понадобится любой виртуальный кошелек. Оплатите на тот адресс кошелька, который указан на выбранном вами пакете.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>3. Как сделать вывод заработанной прибыли?</h3>
<span></span>
</div>
<p>Перейдя в отдел выплаты, введите ваш адресс кошелька и сумму, которую вы бы хотели вывести. Сумма должна не превышать вашего баланса на аккаунте, также будьте внимательны, адресс вашего кошелька должен был действителен, в инном случае вывод будет заблокирован.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>4. Как воспользоваться реферальной программой?</h3>
<span></span>
</div>
<p>Информацию о реферальной программе вы можете найти у нас на сайте. Пригласите друга, вместе приобретите пакеты и получить ваш бонус.</p>
</div>
<div class="faq-item">
<div class="faq-title">
<h3>5. Есть ли минимальная или максимальная сумма покупки?</h3>
<span></span>
</div>
<p>Вы можете ознакомиться со стоимостью наших пакетов во вкладке Пакеты, цена лаврирует от 22$ до 24 000$</p>
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
<li class="active"><a href="faq.php">FAQ</a></li> </ul>
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