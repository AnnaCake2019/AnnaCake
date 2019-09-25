<?php if (isset($addResult)):?>
<h4><?php echo $addResult; ?></h4>
<?php endif; ?>
<div class="row">
    <div class="offset-2 col-8">
        <h1>Торты</h1>
        <p id="answerServer"></p>
        <form name="cake" action="/Admin/Cake/" method="post" enctype="multipart/form-data">
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
<p id="quantity"></p>

<h2>Торты, которые сейчас на сайте</h2>

<div class="row offset-2 offset-xs-1 product">
    <?php foreach ($cakes as $cake): ?>
        <div class="offset-2 col-10 productsAdmin">
            <form action="/Admin/DeleteCake/<?php echo $cake['id']?>" method="POST" id="cake_del_form">
                <h2><?php echo $cake['title']; ?></h2>
                <img src="/img/Cake/<?php echo $cake['img']; ?>">
                <p><?php echo $cake['description']; ?></p>
                <input type="submit" id="button_cake_del" value="Удалить">
            </form>

        </div>
    <?php endforeach; ?>
</div>
<script src="/js/formAdmin.js"></script>

