<div class="row">
    <div class="offset-2 col-8 showOne">
        <h2><?php echo $twoChee['title']; ?></h2>
        <img src="/img/Cheesecake/<?php echo $twoChee['img']; ?>">
        <p><?php echo $twoChee['price']; ?></p>
        <p><?php echo $twoChee['description']; ?></p>
        <form class="forBasked" name="forBasked" method="post" action="#">
            <input class="numberProd" type="number">
            <input type="submit" value="В корзину">
        </form>
    </div>
</div>