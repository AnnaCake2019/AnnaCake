<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/template.css">
    <title>AnnaCake</title>
</head>
<body>
<!--Modal Window Start-->
<a href="#window" class="modalWindow">
    <div class="word"><p>о</p></div>
    <div class="word"><p>б</p></div>
    <div class="word"><p>р</p></div>
    <div class="word"><p>а</p></div>
    <div class="word"><p>т</p></div>
    <div class="word"><p>н</p></div>
    <div class="word"><p>а</p></div>
    <div class="word"><p>я</p></div>
    <div><br></div>
    <div class="word"><p>с</p></div>
    <div class="word"><p>в</p></div>
    <div class="word"><p>я</p></div>
    <div class="word"><p>з</p></div>
    <div class="word"><p>ь</p></div></a>
<div id="window">
    <form method="post" action="#">
        <a href="#close" class="close">X</a>
        <div>
            <label for="name">Имя</label>
            <input id="name" type="text">
        </div>
        <div>
            <label for="phone">Телефон</label>
            <input id="phone" type="text">
        </div>
        <input type="submit" value="Заказать звонок">
    </form>
</div>
<!--Modal Window end-->
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
                <li><a onclick="hideMenu()" href="/cart/show">Корзина</a></li>
            </ul>
        </nav>
    </div>

    <a href="/"><img class="minlog" src="/img/logo.png" alt="logo"></a>
    <nav class="menu">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/shop/show">Магазин</a></li>
            <li><a href="/info/contacts">О нас</a></li>
            <!-- <li><img class="minlog1" src="/img/logo.png" alt=""></li> -->
            <li><a href="/blog/show">Контакты</a></li>
            <li><a href="/cart/show">Корзина</a></li>
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
</body>
</html>