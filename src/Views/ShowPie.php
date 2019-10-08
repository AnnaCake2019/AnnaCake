<div class="row">
       

    <div class="offset-1 col-10 showOne">
        <h4>Выбранный товар</h4>
        <div class="row reverse">
            <div class="col-5">
                <img src="/img/Bakery/<?php echo $pie['img']; ?>">
            </div>
            <div class="offset-1 col-5 col-s-7">
                <p class='pr'><?php echo $pie['title']; ?></p>
                <p class="pr">Цена:   <?php echo $pie['price']; ?></p>

                <form id="bakery_form" class="forBasked" name="forBasked" method="POST" action="/cart/addPie/<?php echo $pie['id'] ?>">
                    <div id="results1" class="js-successbox t-form__successbox t-text t-text_md" style="display:none; ">
                        Товар в корзине!
                    </div> 
                    <p>Товара осталось: <?php echo $pie['quantity']; ?></p>
                    <input class="numberProd" type="number">
                    <input id="buy_button" type="submit" value="В корзину">
                </form>
                <p class="about">О товаре:</p>
                <p><?php echo $pie['description']; ?></p>
            </div>
        </div>

    </div>
</div>