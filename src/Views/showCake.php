<div class="row">
    <div class="offset-2 col-8 showOne">
        <h2><?php echo $cake['title']; ?></h2>
        <img src="/img/Cake/<?php echo $cake['img']; ?>">
        <p><?php echo $cake['price']; ?></p>
        <p><?php echo $cake['description']; ?></p>
        <h3>Товара осталось: <?php echo $cake['quantity']; ?></h3>
        <form class="forBasked" name="forBasked" method="post" action="#">
            <input class="numberProd" type="number">
            <input type="submit" value="В корзину">
        </form>
    </div>
</div>
