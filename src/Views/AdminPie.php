<<div class="row">
    <div class="offset-2 col-8">
        <h1>Кейки</h1>
        <p id="answerServer"></p>
        <form name="cake" action="/Admin/Pie/" method="post" enctype="multipart/form-data">
            <div class="form_cont">
                <input type="text" id="title" name="title" placeholder="Название">
                <input type="file" id="img" name="img" multiple accept="image/*" name="img[]">
                <input type="text" id="price" name="price"  placeholder="Цена">
                <textarea id="description" name="description" placeholder="Описание"></textarea>
                <div>
                    <input type="submit" value="Опубликовать">
        </form>
    </div>
    <div id="yourId"></div>
</div>

<h2>Кейки, которые сейчас на сайте</h2>

<div class="row offset-2 offset-xs-1 product">
    <?php foreach ($pies as $pie): ?>
        <div class="col-xs-11 col-s-4 col-3 productsAdmin">
            <form action="/Admin/DeletePie/<?php echo $pie['id']?>" method="POST" id="cake_del_form">
                <h2><?php echo $pie['title']; ?></h2>
                <a href="/cake/show/<?php echo $pie['id'];?>">
                    <img style="width: 200px; height: 200px;" src="/img/Pie/<?php echo $pie['img']; ?>">
                </a>
                <input type="submit" id="button_cake_del" value="Удалить">
            </form>

        </div>
    <?php endforeach; ?>
</div>
<script src="/js/formAdmin.js"></script>
