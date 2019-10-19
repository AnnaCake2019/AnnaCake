<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img/Ice-Cream.ico">
    <link rel="stylesheet" href="/css/template.css">
<!--    <link rel="stylesheet" href="/css/bootstrap.min.css">-->
    <link>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>AnnaCake</title>
</head>
<body>
<!--Modal Window Start-->
<a href="#" id="modWin" class="modalWindow">
    <img src="/img/ico/phone.png">
</a>
<div id="window" class="closeModal">
    <form method="POST" action="/Mail/send" id="form_mail">
<!--        <a href="#close" class="close"></a>-->
        <div class="row windowFrom">
            <div class="col-12">
                <div id="results" style="display: none;">Спасибо за Ваше обращение, мы свяжемся с вами в ближайшее
                    время
                </div>
                <label for="phone"></label><input name="name" class="formText validate" id="phone" placeholder="Телефон" type="text">
                <label for="name"></label><input name="phone" class="formText validate" id="name" placeholder="Имя" type="text">
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
    <a class="linkClose" href="#close">X</a>
    <div class="row">
        <div class="offset-2 col-8 hi">
            <h4>Ваш заказ</h4>
        </div>
        <div class="offset-2 col-8">
            <div class="orders">
                <form name="orders" method="POST" action="/Mail/sendOffer" id="form_offer">
                	<input name="name" required class="val" type="text" placeholder="Имя">
                    <input name="tel" required class="val" type="text" placeholder="Телефон">
                    <div id="results2" style="display: none;">Ваш заказ отправлен в обработку.</div>
                    <input type="submit" id="button_offer" value="Заказать">
                </form>
            </div>
        </div>
        <div class="col-10 frontBasked">

            <div class="row">
                <div class="offset-2 col-10 order">
                    <h1>Корзина</h1>

                    <?php $bakeryArr=[]; ?>
                    <?php $bakeryPriceArr=[]; ?>

                    <?php $cakeArr=[]; ?>
                    <?php $cakePriceArr=[]; ?>

                    <?php $pieArr=[]; ?>
                    <?php $piePriceArr=[]; ?>

                    <?php $cheesecakeArr=[]; ?>
                    <?php $cheesecakePriceArr=[]; ?>
					

                    <?php foreach ($bakeryCart as $row1): ?>
                        <?php foreach ($row1 as $row2): ?>
                            <div class=" col-12 sums">
                                <p><?php echo $row2['title']; ?></p>
                                <div> 	
                                	<p>Количество: </p>
                                	<form class="bakery_minus" method="POST" action="/Cart/minusBakery/<?php echo $row2['id'] ?>">
                                		<input type="submit" value="-">
                                	</form>  

                                    <p class="amountCart"><?php echo $row2['count']; ?></p>
                                    <p style="display: none;" class="oneSum"><?php echo $row2['price']; ?></p>
                                    <form class="bakery_plus" method="POST" action="/Cart/plusBakery/<?php echo $row2['id'] ?>">
                                		<input type="submit" value="+">
                                	</form>
                                </div>
                                <div>
	                                <p>Цена: </p>
	                                <p style="display: none;" class="amountCart1"><?php echo $row2['count']; ?></p>
                                    <p class="oneSum1"><?php echo $row2['price']; ?></p>                                		
                                </div> 

                                <div>
                                	<form method="POST" action="/Cart/deleteBakery/<?php echo $row2['id'] ?>" class="bakery_del">
                                		<input type="submit" id="bakery_del_btn" value="X">
                                	</form>
                                </div>
                            </div>
                            <?php array_push($bakeryArr, $row2['title']) ?>
                            <?php array_push($bakeryPriceArr, $row2['price']) ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>





                    <textarea style="display: none;" name="bakeryOffer"><?php foreach ($bakeryArr as $bakArr) echo ("|" . $bakArr . "\t"); ?><?php echo "\n"; ?><?php foreach ($bakeryPriceArr as $bakPrArr) echo ("|" . $bakPrArr  . "\t"); ?></textarea>


                    <?php foreach ($cakeCart as $row3): ?>
                        <?php foreach ($row3 as $row4): ?>
                            <div class=" col-12 sums">
                                <p><?php echo $row4['title']; ?></p>
                                <div> 	
                                	<p>Количество: </p>
                                	<form class="cake_minus" method="POST" action="/Cart/minusCake/<?php echo $row4['id'] ?>">
                                		<input type="submit" value="-">
                                	</form>  

                                    <p class="amountCart"><?php echo $row4['count']; ?></p>
                                    <p style="display: none;" class="oneSum"><?php echo $row4['price']; ?></p>
                                    <form class="cake_plus" method="POST" action="/Cart/plusCake/<?php echo $row4['id'] ?>">
                                		<input type="submit" value="+">
                                	</form>
                                </div>
                                <div>
	                                <p>Цена: </p>
	                                <p style="display: none;" class="amountCart1"><?php echo $row4['count']; ?></p>
                                    <p class="oneSum1"><?php echo $row4['price']; ?></p>                                		
                                </div> 

                                <div>
                                	<form method="POST" action="/Cart/deleteCake/<?php echo $row4['id'] ?>" class="cake_del">
                                		<input type="submit" id="cake_del_btn" value="X">
                                	</form>
                                </div>
                            </div>
                            <?php array_push($cakeArr, $row4['title']) ?>
                            <?php array_push($cakePriceArr, $row4['price']) ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

                    <textarea style="display: none;" name="cakeOffer"><?php foreach ($cakeArr as $cakArr) echo ("|" . $cakArr . "\t"); ?><?php echo "\n"; ?><?php foreach ($cakePriceArr as $cakPrArr) echo ("|" . $cakPrArr  . "\t"); ?></textarea>

                    <?php foreach ($pieCart as $row5): ?>
                        <?php foreach ($row5 as $row6): ?>
                            <div class=" col-12 sums">
                                <p><?php echo $row6['title']; ?></p>
                                <div> 	
                                	<p>Количество: </p>
                                	<form class="pie_minus" method="POST" action="/Cart/minusPie/<?php echo $row6['id'] ?>">
                                		<input type="submit" value="-">
                                	</form>  

                                    <p class="amountCart"><?php echo $row6['count']; ?></p>
                                    <p style="display: none;" class="oneSum"><?php echo $row6['price']; ?></p>
                                    <form class="pie_plus" method="POST" action="/Cart/plusPie/<?php echo $row6['id'] ?>">
                                		<input type="submit" value="+">
                                	</form>
                                </div>
                                <div>
	                                <p>Цена: </p>
	                                <p style="display: none;" class="amountCart1"><?php echo $row6['count']; ?></p>
                                    <p class="oneSum1"><?php echo $row6['price']; ?></p>                                		
                                </div> 

                                <div>
                                	<form method="POST" action="/Cart/deletePie/<?php echo $row6['id'] ?>" class="pie_del">
                                		<input type="submit" id="pie_del_btn" value="X">
                                	</form>
                                </div>
                            </div>                            
                            <?php array_push($cakeArr, $row6['title']) ?>
                            <?php array_push($cakePriceArr, $row6['price']) ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

                    <textarea style="display: none;" name="pieOffer"><?php foreach ($pieArr as $piArr) echo ("|" . $piArr . "\t"); ?><?php echo "\n"; ?><?php foreach ($piePriceArr as $piePrArr) echo ("|" . $piePrArr  . "\t"); ?></textarea>

                    <?php foreach ($cheesecakeCart as $row7): ?>
                        <?php foreach ($row7 as $row8): ?>
                            <div class=" col-12 sums">
                                <p><?php echo $row8['title']; ?></p>
                                <div> 	
                                	<p>Количество: </p>
                                	<form class="cheese_minus" method="POST" action="/Cart/minusCheese/<?php echo $row8['id'] ?>">
                                		<input type="submit" value="-">
                                	</form>  

                                    <p class="amountCart"><?php echo $row8['count']; ?></p>
                                    <p style="display: none;" class="oneSum"><?php echo $row8['price']; ?></p>
                                    <form class="cheese_plus" method="POST" action="/Cart/plusCheese/<?php echo $row8['id'] ?>">
                                		<input type="submit" value="+">
                                	</form>
                                </div>
                                <div>
	                                <p>Цена: </p>
	                                <p style="display: none;" class="amountCart1"><?php echo $row8['count']; ?></p>
                                    <p class="oneSum1"><?php echo $row8['price']; ?></p>                                		
                                </div> 

                                <div>
                                	<form method="POST" action="/Cart/deleteCheese/<?php echo $row8['id'] ?>" class="cheese_del">
                                		<input type="submit" id="cheese_del_btn" value="X">
                                	</form>
                                </div>
                            </div>
                            <?php array_push($cheesecakeArr, $row8['title']) ?>
                            <?php array_push($cheesecakePriceArr, $row8['price']) ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

                    <textarea style="display: none;" name="cheesecakeOffer"><?php foreach ($cheesecakeArr as $cheeseArr) echo ("|" . $cheeseArr . "\t"); ?><?php echo "\n"; ?><?php foreach ($cheesecakePriceArr as $cheesecakePrArr) echo ("|" . $cheesecakePrArr  . "\t"); ?></textarea>

                </div>

               <div class="offset-3 col-9 sum">
                    <textarea style="display: none;" name="summ" id="commonSum1"></textarea>
                    <p id="forCommonSum"></p> <p id="commonSum"></p>
                </div>

            </div>
        </div>
        </form>
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
                <li><a onclick="hideMenu()" href="/Index/About">О нас</a></li>
                <li><a onclick="hideMenu()" href="/Index/Contact/">Контакты</a></li>
                <li><a onclick="hideMenu()" href="#basked">Корзина</a></li>
            </ul>
        </nav>
    </div>

    <a href="/"><img class="minlog" src="/img/ico/iconf5.png" alt="logo"></a>
    <div id="fixed">
        <nav id="fixed" class="menu">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/shop/show">Магазин</a></li>
                <li><a href="/Index/About">О нас</a></li>
                <li><a href="/Index/Contact/">Контакты</a></li>
                <li><a href="#basked">Корзина</a></li>

            </ul>
            <p>Контакты:<br>
                8(981)154-65-10<br>
                8(981)137-43-14</p>
        </nav>
    </div>
</div>
<?php include_once $content ?>
<a class="baskedImg" href="#basked"><img src="/img/ico/basket.png"></a>
<footer>
    <div class="contact">
    <p>Контакты:<br>
        8(981)154-65-10<br>
        8(981)137-43-14</p>
    <p>
        confectioneryspb1@yandex.ru
    </p>
    <a href="https://www.instagram.com/cakeannaverina/?igshid=4vy8b0lqk44k"><img src="/img/ico/instagram.ico"></a>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/js/modWin.js"></script>
<script src="/js/script.js"></script>
<script src="/js/communication.js"></script>
<script src="/js/basked.js"></script>
<script src="/js/fixedMenu.js"></script>
</body>
</html>