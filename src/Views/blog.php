<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Корзина</h1>
        <a id=“foreShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <?php foreach ($bakery as $row1): ?>
                <?php foreach ($row1 as $row2): ?>

                    <div class="col-xs-11 col-s-4 col-3 products">
                        <h2><?php echo $row2['title']; ?></h2>
                        <h3>Цена: <?php echo $row2['price']; ?></h3>
                        <a class="detail" href="/Shop/ShowBakery/<?php echo $row2['id'];?>">Подробнее</a>
                    </div>

                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

