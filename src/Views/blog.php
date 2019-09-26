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
<h3>Итоговая сумма: <?php echo $summ; ?> рублей</h3>
    