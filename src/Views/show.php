<div class="row">
    <div class="offset-1 col-10 assorted">
        <h1>Торты</h1>
<!--         <div class="row product">
            <div class="col- col-3"><img src="/img/shop.jpg"><p>Название</p><p>цена</p></div>
            <div class="col- col-3"><img src="/img/shop.jpg"><p>Название</p><p>цена</p></div>
            <div class="col- col-3"><img src="/img/shop.jpg"><p>Название</p><p>цена</p></div>
        </div>
        <div class="row product">
            <div class="col- col-3"><img src="/img/shop.jpg"><p>Название</p><p>цена</p></div>
            <div class="col- col-3"><img src="/img/shop.jpg"><p>Название</p><p>цена</p></div>
            <div class="col- col-3"><img src="/img/shop.jpg"><p>Название</p><p>цена</p></div>
        </div> -->
        <div style="display: flex">
           <?php foreach ($cakes as $cake): ?>
            <div>
                <h2><?php echo $cake['title']; ?></h2>
                <a href="/cake/show/<?php echo $cake['id'];?>">
                    <img style="width: 200px; height: 200px;" src="/img/<?php echo $cake['img']; ?>">
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