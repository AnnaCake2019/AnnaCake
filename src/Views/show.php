<!--Modal window start-->

<!--<div id="product">-->
<!--    <h2>--><?php //echo $cake['title']; ?><!--</h2>-->
<!--        <img src="/img/Cake--><?php //echo $cake['img']; ?><!--">-->
<!--        <p>--><?php //echo $cake['price']; ?><!--</p>-->
<!--        <p>--><?php //echo $cake['description']; ?><!--</p>-->
<!--</div>-->
<!--Modal window end-->
<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Торты</h1>
        <div class="row offset-2 offset-xs-1 product">
           <?php foreach ($cakes as $cake): ?>
            <div class="col-xs-11 col-s-4 col-3 products"
                <h2><?php echo $cake['title']; ?></h2>
            <a href="#product">
                <a href="/Admin/CakeShowOne/<?php echo $cake['id'];?>">
                    <img src="/img/Cake<?php echo $cake['img']; ?>">
                    <p><?php echo $cake['price']; ?></p>
                    <p><?php echo $cake['description']; ?></p>
                </a>
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