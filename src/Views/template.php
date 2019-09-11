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
                <li><a onclick="hideMenu()" href="/">SOFT</a></li>
                <li><a onclick="hideMenu()" href="/shop/show">Магазин</a></li>
                <li><a onclick="hideMenu()" href="/info/contacts">Контакты</a></li>
                <li><a onclick="hideMenu()" href="/blog/show">Ваш дизайн</a></li>
                <li><a onclick="hideMenu()" href="/cart/show">Корзина</a></li>
                <li><a onclick="hideMenu()" href="/account/show">Личный кабинет</a></li>
            </ul>
        </nav>
    </div>

    <div class="logo"><a href="/"><img class="minlog" src="/img/logo.png" alt="logo"></a></div>
    <nav class="menu">
        <ul>
            <a href="/">SOFT</a>
            <a href="/shop/show">Магазин</a>
            <a href="/info/contacts">Контакты</a>
            <a href="/blog/show">Ваш дизайн</a></li>
            <a href="/cart/show">Корзина</a></li>
            <a href="/account/show">Личный кабинет</a>
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