<div class="row">
       

    <div class="offset-1 col-10 showOne">
        <h4>Выбранный товар</h4>
        <div class="row reverse">
            <div class="col-5">
                <img src="/img/Cake/<?php echo $cake['img']; ?>">
            </div>
            <div class="offset-1 col-5 col-s-7">
                <p class='pr'><?php echo $cake['title']; ?></p>
                <p class="pr">Цена: <?php echo $cake['price']; ?></p>

                <form id="bakery_form" class="forBasked" name="forBasked" method="POST" action="/cart/addCake/<?php echo $cake['id'] ?>">
<!--                     <div id="results1" class="js-successbox t-form__successbox t-text t-text_md" style="display:none; ">
                        Товар в корзине!
                    </div>  -->
                    <input id="buy_button" type="submit" value="В корзину">
                </form>
                <p class="about">О товаре:</p>
                <p><?php echo $cake['description']; ?></p>
            </div>
        </div>

    </div>
</div>