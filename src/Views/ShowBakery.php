<div class="row">
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
    </div>
</div>