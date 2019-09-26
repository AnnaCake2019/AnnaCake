<div class="row">
<<<<<<< HEAD
    <div class="offset-2 col-8 showOne">
        <h2><?php echo $bakery['title']; ?></h2>
        <img src="/img/Bakery/<?php echo $bakery['img']; ?>">
        <p><?php echo $bakery['price']; ?></p>
        <p><?php echo $bakery['description']; ?></p>
        <?php echo $bakery['id']; ?>
        <h3>Товара осталось: <?php echo $bakery['quantity']; ?></h3>
        <!-- <form class="forBasked" name="forBasked" method="post" action="#"> -->
            <input class="numberProd" type="number">
            <!-- <input type="submit" value="В корзину"> -->
        <!-- </form> -->
        <form id="bakery_form" method="POST" action="/cart/add/<?php echo $bakery['id']?>">
               <div id="results1" class="js-successbox t-form__successbox t-text t-text_md" style="display:none; ">
                    Товар в корзине!
                </div> 
               <input id="buy_button" type="submit" value="Заказать">
        </form>        
=======
    <div class="offset-1 col-10 showOne">
        <h4>Выбранный товар</h4>
        <div class="row reverse">
            <div class="col-5">
                <img src="/img/Bakery/<?php echo $bakery['img']; ?>">
            </div>
            <div class="offset-1 col-5 col-s-7">
                <p class='pr'><?php echo $bakery['title']; ?></p>
                <p class="pr">Цена:   <?php echo $bakery['price']; ?></p>
                <form class="forBasked" name="forBasked" method="post" action="#">
                    <input class="numberProd" type="number">
                    <input type="submit" value="В корзину">
                </form>
                <p class="about">О товаре:</p>
                <p><?php echo $bakery['description']; ?></p>
            </div>
        </div>
>>>>>>> 1b1e90b4ddd048812fd92b6135183ac1c0fc5491
    </div>
</div>