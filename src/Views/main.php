<div class="row">
    <div id="show" class="col-12">
        <ul id="slides">
            <li class="slide showing"><img src="/img/cakeOne.jpg"></li>
            <li class="slide"><img src="/img/cakeThree.jpg"></li>
            <li class="slide"><img src="/img/cakeTwo.jpg"></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class=" gallery">
        <div>
            <div class="gallerys">
                <p>Торты</p>
                <?php foreach ($fcakes as $fcake): ?>
                    <a href="/Shop/Show#OneShow">
                        <img src="/img/Front/<?php echo $fcake['img']; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="gallerys">
                <p>Кейки</p>
                <?php foreach ($fcheesecakes as $fcheesecake): ?>
                    <a href="/Shop/Show#twoShow">
                        <img src="/img/Front/<?php echo $fcheesecake['img']; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div>
            <div class="gallerys">
                <p>Чизкейки</p>
                <?php foreach ($fpies as $fpie): ?>
                    <a href="/Shop/Show#threeShow">
                        <img src="/img/Front/<?php echo $fpie['img']; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="gallerys">
                <p>Выпечка</p>
                <?php foreach ($fbakerys as $fbakery): ?>
                    <a href="/Shop/Show#foreShow">
                        <img src="/img/Front/<?php echo $fbakery['img']; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script src="/js/sliderActive.js"></script>