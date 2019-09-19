<?php if (isset($addResult)):?>
<h4><?php echo $addResult; ?></h4>
<?php endif; ?>
<div class="row">
    <div class="offset-2 col-8">
        <h1>Торты</h1>
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

<h2>Торты, которые сейчас на сайте</h2>

        <div style="display: flex">
           <?php foreach ($cakes as $cake): ?>
            <div>
                <form action="/Admin/DeleteCake/<?php echo $cake['id']?>" method="POST" id="cake_del_form">
                    <h2><?php echo $cake['title']; ?></h2>
                    <a href="/cake/show/<?php echo $cake['id'];?>">
                        <img style="width: 200px; height: 200px;" src="/img/<?php echo $cake['img']; ?>">
                    </a>     
                    <input type="submit" id="button_cake_del" value="Удалить">           
                </form>

            </div>
            <?php endforeach; ?>
        </div>
<script src="/js/library.js"></script>

