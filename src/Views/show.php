<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Торты</h1>
        <a id=“OneShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <div class="col-xs-11 col-s-4 col-3 products">
                <?php foreach ($cakes as $cake): ?>
                    <h2><?php echo $cake['title']; ?></h2>
                    <img src="/img/Cake/<?php echo $cake['img']; ?>">
                    <p><?php echo $cake['price']; ?></p>
                    <a class="detail" href="/Shop/showCake/<?php echo $cake['id']; ?>">
                        Подробнее
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Кейки</h1>
        <a id=“twoShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <div class="col-xs-11 col-s-4 col-3 products">
                <?php foreach ($pies as $pie): ?>
                    <h2><?php echo $pie['title']; ?></h2>
                    <img src="/img/Pie/<?php echo $pie['img']; ?>">
                    <p><?php echo $pie['price']; ?></p>
                    <a class="detail" href="/Shop/ShowPie/<?php echo $pie['id']; ?>">
                        Подробнее
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Чизкейки</h1>
        <a id=“threeShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <div class="col-xs-11 col-s-4 col-3 products">
                <?php foreach ($twoChees as $twoChee): ?>
                    <h2><?php echo $twoChee['title']; ?></h2>
                    <img src="/img/Cheesecake/<?php echo $twoChee['img']; ?>">
                    <p><?php echo $twoChee['price']; ?></p>
                    <a class="detail" href="/Shop/ShowChees/<?php echo $twoChee['id']; ?>">
                        Подробнее
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Выпечка</h1>
        <a id=“foreShow”></a>
        <div class="row offset-2 offset-xs-1 product">
            <div class="col-xs-11 col-s-4 col-3 products">
                <?php foreach ($bakerys as $bakery): ?>
                    <h2><?php echo $bakery['title']; ?></h2>
                    <img src="/img/Bakery/<?php echo $bakery['img']; ?>">
                    <p><?php echo $bakery['price']; ?></p>
                    <a class="detail" href="/Shop/ShowBakery/<?php echo $bakery['id']; ?>">
                        Подробнее
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
