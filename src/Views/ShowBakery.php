<div class="row">
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
    </div>
</div>