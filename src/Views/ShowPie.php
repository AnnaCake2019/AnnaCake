<div class="row">
    <div class="offset-2 col-8 showOne">
        <h2><?php echo $pie['title']; ?></h2>
        <img src="/img/Pie/<?php echo $pie['img']; ?>">
        <p><?php echo $pie['price']; ?></p>
        <p><?php echo $pie['description']; ?></p>
        <h3>Товара осталось: <?php echo $pie['quantity']; ?></h3>
        <form class="forBasked" name="forBasked" method="post" action="#">
            <input class="numberProd" type="number">
            <input type="submit" value="В корзину">
        </form>
    </div>
</div>