<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/template.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>AnnaCake</title>
</head>
<body>
<!--Modal Window Start-->
<a href="#window" class="modalWindow">
    <img src="/img/ico/phone.png">
</a>
<div id="window">
    <form name="communication" method="post" action="#">
        <a href="#close" class="close">X</a>
        <div class="row windowFrom">
            <div class="col-6">
                <label class="formText" for="phone">Телефон</label>
                <label class="formText" for="name">Имя</label>
            </div>
            <div class="col-6">
                <input name="name" class="formText validate" id="phone" placeholder="Телефон" type="text">
                <input name="phone" class="formText validate" id="name" placeholder="Имя" type="text">
            </div>
        </div>
        <div class="col-12 bot">
        <input class="bot" type="submit" value="Заказать звонок">
        </div>
        <div class="col-12">
            <p id="errors"></p>
        </div>
    </form>
</div>
<!--Modal Window end-->

<!--Basked Window start-->
<div id="basked">
    <a href="#close">X</a>
    <div class="row">
        <div class="offset-2 col-8 hi">
            <h4>Ваш заказ</h4>
        </div>
        <div class="offset-2 col-8">
            <div class="orders">
                <form name="orders" method="post" action="#">
                    <input class="val" type="text" placeholder="Имя">
                    <input class="val" type="text" placeholder="Телефон">
                    <input type="submit" value="Заказать">
                </form>
            </div>
        </div>
        <div class="offset-2 col-8 order">
            <p>Торыт</p><p>Колво: 2</p><p>Сума: 2000р.</p>
        </div>
        </div>
</div>
<!--Basked Window end-->
<div class="header">
    <div class="mob-head">
        <div id="burg" onclick="showMenu()">
            <a href="#">
                <span class="bar" id="top"></span>
                <span class="bar" id="middle"></span>
                <span class="bar" id="bottom"></span>
            </a>
        </div>
        <nav class="mobile-menu" id="mobile">
            <ul>
                <li><a onclick="hideMenu()" href="/">Главная</a></li>
                <li><a onclick="hideMenu()" href="/shop/show">Магазин</a></li>
                <li><a onclick="hideMenu()" href="/info/contacts">О нас</a></li>
                <li><a onclick="hideMenu()" href="/blog/show">Контакты</a></li>
                <li><a onclick="hideMenu()" href="#basked">Корзина</a></li>
            </ul>
        </nav>
    </div>

    <a href="/"><img class="minlog" src="/img/logo.png" alt="logo"></a>
    <nav class="menu">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/shop/show">Магазин</a></li>
            <li><a href="/info/contacts">О нас</a></li>
            <li><a href="/blog/show">Контакты</a></li>
            <li><a href="#basked">Корзина</a></li>
        </ul>
    </nav>
</div>
<?php include_once $content ?>
<div class="row">
    <div class="col-12">
<footer>

</footer>
    </div>
</div>
<script src="/js/script.js"></script>
<script src="/js/communication.js"></script>
<script src="/js/basked.js"></script>
</body>
</html>