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
    <form method="POST" action="/mail/send" id="form_mail">
        <a href="#close" class="close">X</a>
        <div class="row windowFrom">
            <div class="col-6">
                <label class="formText" for="phone">Телефон</label>
                <label class="formText" for="name">Имя</label>
            </div>
            <div class="col-6">
                    <div id="results" style="display: none;">Спасибо за Ваше обращение, мы свяжемся с вами в ближайшее время</div>
                    <input name="name" class="formText validate" id="phone" placeholder="Телефон" type="text">
                    <input name="phone" class="formText validate" id="name" placeholder="Имя" type="text">
            </div>
        </div>
        <div class="col-12 bot">
        <input class="bot" type="submit" id="button_send" value="Заказать звонок">
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
            <!-- <p>Торты</p><p>Колво: 2</p><p>Сума: 2000р.</p> -->


    <div style="display: flex;">
        <?php $summ = 0; ?>
        <?php foreach ($bakery as $arr1): ?>
            <?php foreach ($arr1 as $arr2): ?>
            <?php $summ = $summ + $arr2['price']; ?>
            <div id="bakery" class="bakery">
                <h2><?php echo $arr2['title']; ?></h2>
                <p><?php echo $arr2['price']; ?></p>
                <form id="bakery_del" class="bakery_del" method="POST" action="/cart/delete/<?php echo $arr2['id']?>">
                    <div id="results2" class="results2" class="js-successbox t-form__successbox t-text t-text_md" style="display:none; ">
                        Товар удален из корзины!
                    </div> 
                <input id="del_button" class="del_button" type="submit" value="Удалить из корзины">
                </form>
            </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>   
    

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
    <div id="fixed">
        <nav id="fixed" class="menu">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/shop/show">Магазин</a></li>
                <li><a href="/info/contacts">О нас</a></li>
                 <li><a href="/cart/add/">Пробная корзина</a></li>  <!-- ВЫПОЛНЯЮ add, КАК БУД-ТО ПРИ НАЖАТИИ НА КНОПКУ "ЗАКАЗАТЬ" НА СТРАНИЦЕ С ТОВАРОМ -->
                                                                    <!-- ВЫПОЛНЯЮ ЗДЕСЬ, ПОТОМУ ЧТО ТУТ УДОБНО СМОТРЕТЬ, КАКАЯ ОШИБКА ВЫЛАЗИТ -->
                <li><a href="#basked">Корзина</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php include_once $content ?>
<div class="row">
    <div class="col-12">
<div class="footer">

</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/communication.js"></script>
<script src="/js/basked.js"></script>
<script src="/js/fixedMenu.js"></script>
</body>
</html>