<div class="row">
    <div class="offset-1 col-10 assorted">
        <h2>Торты</h2>
        <a id=“OneShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <?php foreach ($cakes as $cake): ?>
                <div class="col-xs-11 col-s-4 col-3 products">
                    <h3><?php echo $cake['title']; ?></h3>
                    <img src="/img/Cake/<?php echo $cake['img']; ?>">
                    <p><?php echo $cake['price']; ?></p>
                    <a class="detail" href="/Cart/ShowCake/<?php echo $cake['id']; ?>">
                        Подробнее
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h2>Кейки</h2>
        <a id=“twoShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <?php foreach ($pies as $pie): ?>
                <div class="col-xs-11 col-s-4 col-3 products">
                    <h3><?php echo $pie['title']; ?></h3>
                    <img src="/img/Pie/<?php echo $pie['img']; ?>">
                    <p><?php echo $pie['price']; ?></p>
                    <a class="detail" href="/Cart/ShowPie/<?php echo $pie['id']; ?>">
                        Подробнее
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h2>Чизкейки</h2>
        <a id=“threeShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <?php foreach ($twoChees as $twoChee): ?>
                <div class="col-xs-11 col-s-4 col-3 products">
                    <h3><?php echo $twoChee['title']; ?></h3>
                    <img src="/img/Cheesecake/<?php echo $twoChee['img']; ?>">
                    <p><?php echo $twoChee['price']; ?></p>
                    <a class="detail" href="/Cart/ShowChees/<?php echo $twoChee['id']; ?>">
                        Подробнее
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h2>Выпечка</h2>
        <a id=“foreShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <?php foreach ($bakerys as $bakery): ?>
                <div class="col-xs-11 col-s-4 col-3 products">
                    <h3><?php echo $bakery['title']; ?></h3>
                    <img src="/img/Bakery/<?php echo $bakery['img']; ?>">
                    <p><?php echo $bakery['price']; ?></p>
                    <a class="detail" href="/Cart/ShowBakery/<?php echo $bakery['id']; ?>">
                        Подробнее
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
