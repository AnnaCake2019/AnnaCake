<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Корзина</h1>
        <a id=“foreShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <?php foreach ($bakerysBaskets as $bakery): ?>
                    <div class="col-xs-11 col-s-4 col-3 products">
                        <h2>Товар №<?php echo $bakery['Bakery_id']; ?></h2>
                        <a class="detail" href="/Shop/ShowBakery/<?php echo $bakery['Bakery_id'];?>">Подробнее</a>
                        <h2>Название: <?php echo $row['title']; ?></h2>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

