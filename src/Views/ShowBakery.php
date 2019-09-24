<div class="row">
    <div class="offset-2 col-8 showOne">
        <h2><?php echo $bakery['title']; ?></h2>
        <img src="/img/Bakery/<?php echo $bakery['img']; ?>">
        <p><?php echo $bakery['price']; ?></p>
        <p><?php echo $bakery['description']; ?></p>
        <form class="forBasked" name="forBasked" method="post" action="#">
            <input class="numberProd" type="number">
            <input type="submit" value="В корзину">
        </form>
    </div>
</div>