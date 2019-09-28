<!--         <div style="display: flex;">
                    <h2><?php echo $bakery['title']; ?></h2>
                    <p><?php echo $bakery['price']; ?></p>
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
     <h3>Итоговая сумма: <?php echo $summ; ?> рублей</h3>  -->


<!--     <div style="display: flex;">
                <h2><?php echo $bakery['title']; ?></h2>
                <p><?php echo $bakery['price']; ?></p>
        <?php $summ = 0; ?>
        <?php foreach ($bakery as $arr1): ?>
            <?php $summ = $summ + $arr1['price']; ?>
            <div id="bakery" class="bakery">
                <h2><?php echo $arr1['id']; ?></h2>
                <h2><?php echo $arr1['title']; ?></h2>
                <p><?php echo $arr1['price']; ?></p>
                <form id="bakery_del" class="bakery_del" method="POST" action="/cart/delete/<?php echo $arr1['id']?>">
                    <div id="results2" class="results2" class="js-successbox t-form__successbox t-text t-text_md" style="display:none; ">
                        Товар удален из корзины!
                    </div> 
                <input id="del_button" class="del_button" type="submit" value="Удалить из корзины">
                </form>
            </div>
        <?php endforeach; ?>
    </div> 
    <h3>Итоговая сумма: <?php echo $summ; ?> рублей</h3> -->





<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Выпечка</h1>
        <a id=“foreShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <?php foreach ($bakerysBaskets as $bakery): ?>
            <div class="col-xs-11 col-s-4 col-3 products">
            <h2>Корзина №<?php echo $bakery['id']; ?></h2>
            <h2>Товар №<?php echo $bakery['Bakery_id']; ?></h2>
            <a class="detail" href="/Shop/ShowBakery/<?php echo $bakery['id'];?>">
                Подробнее
            </a>
        </div>

        <?php endforeach; ?>
    </div>
</div>