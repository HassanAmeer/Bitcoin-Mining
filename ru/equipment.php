

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
<div class="eqPage-bg">
<header class="header-content">
<div class="logo">
<a href="../ru.php"></a>
</div>
<nav class="navHead-content">
<ul>
<li><a href="about.php">О нас</a></li>
<li><a href="package.php">Инвестиционные пакеты</a></li>
<li class="active"><a href="equipment.php">Оборудование</a></li>
<li><a href="referral.php">Реферальная Программа</a></li>
<li><a href="faq.php">FAQ</a></li> </ul>
</nav>
<div class="lang ru">
ru
<ul>
<li>
<a href="../en/equipment.php" class="en">en</a>
</li>
</ul>
</div>
<div class="auth-btn">
<a href="login.php">Войти</a>
<a class="sign" href="register.php">Регистрация</a>
</div>
<div class="navBtn"><span></span></div>
</header>
<div class="eqPage-titleBody">
<div class="eqPage-title">
<h1>Наше оборудование</h1>
<p>Нам удалось открыть доступ к эко-майнингу для всех, благодаря инновационному и качественному оборудованию.</p>
</div>
</div>
</div>
<section class="eq-infoContent">
<section class="eq-info">
<div class="item img1"></div>
<div class="item">
<h2>Asic Whatsminer M20S 70TH/s</h2>
<p>MicroBT выпустили ASIC Whatsminer M20s 70 TH / s для майнинга биткойнов по алгоритму SHA-256.</p>
<p>ASIC Whatsminer M20s 70 TH / s изготовлен из высококачественного алюминия, поэтому конструкция устройства надежно защищена от механических повреждений. По бокам расположены двое специальных кулеров, которые обеспечивают эффективное охлаждение, защищая ASIC от перегрева.</p>
<ul>
<li>Scrypt mining hashrate: 70Th/s </li>
<li>Power consumption: 3360W</li>
<li>Hashing algorithm: SHA256</li>
<li>Chip name: TSMC</li>
<li>Power efficiency: 67 J/GHs</li>
<li>Rated voltage: 12V</li>
<li>Noise level: 75db</li>
</ul>
</div>
</section>
<section class="eq-info">
<div class="item img2"></div>
<div class="item">
<h2>Miner ASIC Antminer S15</h2>
<p>Antminer S9 с 16nm chips, который удерживал лидерство почти два года, был заменен новой моделью - asic Bitmain Antminer S15.</p>
<p>Потребляемая мощность относительно экономична, а в корпусе используется легкий, но прочный алюминиевый сплав, ускоряющий охлаждение.</p>
<ul>
<li>Scrypt mining hashrate: 28 Th/s</li>
<li>Power consumption: 1600W</li>
<li>Hashing algorithm: SHA256</li>
<li>Chip name: BM1391</li>
<li>Power efficiency: 57 J/GHs</li>
<li>Noise level: 80db</li>
</ul>
</div>
</section>
</section>
<section class="eq-info-lg">
<div class="item">
<div class="box">
<h3>Последовательность</h3>
<p>Компания позаботилась о систематизации функций по активации пакетов и платежей.</p>
</div>
<div class="box">
<h3>Регулярность</h3>
<p>А также обеспечены регулярность и автоматизация платежей для быстрого получения прибыли без проблем.</p>
</div>
<div class="box">
<h3>Надежность</h3>
<p>Компания отвечает за безопасность данного сервера и обеспечивает надежный майнинг.</p>
</div>
</div>
<div class="item">
<div class="box">
<h3>Инновации</h3>
<p>Нам удалось открыть доступ к эко-майнингу для всех.</p>
</div>
<div class="box">
<h3>Функциональность</h3>
<p>Благодаря функциональным возможностям сервера покупка, снятие и отслеживание баланса для наших клиентов не составляет труда.</p>
</div>
<div class="box">
<h3>Индивидуальность</h3>
<p>Наша служба поддержки старается индивидуально подходить к каждому клиенту, учитывая ваши пожелания, мы стараемся как можно скорее реализовать их для дальнейшего использования.</p>
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
<li class="active"><a href="equipment.php">Оборудование</a></li>
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