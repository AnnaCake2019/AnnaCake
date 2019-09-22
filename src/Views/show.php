
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Торты</h1>
        <div class="row offset-2 offset-xs-1 product">
           <?php foreach ($cakes as $cake): ?>
            <div class="col-xs-11 col-s-4 col-3 products"
                <h2><?php echo $cake['title']; ?></h2>
                    <img src="/img/Cake/<?php echo $cake['img']; ?>">
                    <p><?php echo $cake['price']; ?></p>
                    <a class="detail" href="/Shop/ShowOne/<?php echo $cake['id'];?>">
                        Подробнее
                    </a>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Кейки</h1>
    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Чизкейки</h1>

    </div>
</div>
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Выпечка</h1>

    </div>
</div>