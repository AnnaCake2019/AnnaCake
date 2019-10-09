<div class="row front_row">
    <div class="offset-2 col-8">
        <div class="offset-1 col-4 front_form">
            <fieldset>Картинка для тортов
                <form action="/Admin/FrontCake/" method="post" enctype="multipart/form-data">
                    <input type="file" name="img" multiple accept="image/*">
                    <input type="submit">
                </form>
            </fieldset>
            <div class="cont_for_front">
                <?php foreach ($frontCakes as $frontCake): ?>
                    <img src="/img/Front/<?php echo $frontCake['img']; ?>">
                <a href="/Admin/DeleteFrontCakes/<?php echo $frontCake['id']; ?>">Удалить</a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="offset-2 col-4 front_form">
            <fieldset>Картинка для Чизкейки
                <form action="/Admin/FrontCheesecake/" method="post" enctype="multipart/form-data">
                    <input type="file" name="img" multiple accept="image/*">
                    <input type="submit">
                </form>
            </fieldset>
            <div class="cont_for_front">
                <?php foreach ($frontCheesecakes as $frontCheesecake): ?>
                    <img src="/img/Front/<?php echo $frontCheesecake['img']; ?>">
                <a href="/Admin/DeleteFrontCheesecakes/<?php echo $frontCheesecake['id']; ?>">Удалить</a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-2 col-8">
        <div class="offset-1 col-4 front_form">
            <fieldset>Картинка для Кейков
                <form action="/Admin/FrontPie/" method="post" enctype="multipart/form-data">
                    <input type="file" name="img" multiple accept="image/*">
                    <input type="submit">
                </form>
            </fieldset>
            <div class="cont_for_front">
                <?php foreach ($frontPies as $frontPie): ?>
                    <img src="/img/Front/<?php echo $frontPie['img']; ?>">
                    <a href="/Admin/DeleteFrontPies/<?php echo $frontPie['id']; ?>">Удалить</a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="offset-2 col-4 front_form">
            <fieldset>Картинка для Выпечки
                <form action="/Admin/FrontBakery/" method="post" enctype="multipart/form-data">
                    <input type="file" name="img" multiple accept="image/*">
                    <input type="submit">
                </form>
            </fieldset>
            <div class="cont_for_front">
                <?php foreach ($frontBakerys as $frontBakery): ?>
                    <img src="/img/Front/<?php echo $frontBakery['img']; ?>">
                    <a href="/Admin/DeleteFrontBakery/<?php echo $frontBakery['id']; ?>">Удалить</a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>