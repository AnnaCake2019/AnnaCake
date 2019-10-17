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
                <a href="/Shop/Show#OneShow"><p>Торты</p></a>
                <?php foreach ($fcakes as $fcake): ?>
                    <a href="/Shop/Show#OneShow">
                        <img src="/img/Front/<?php echo $fcake['img']; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="gallerys">
                <a href="/Shop/Show#twoShow"><p>Кейки</p></a>
                <?php foreach ($fcheesecakes as $fcheesecake): ?>
                    <a href="/Shop/Show#twoShow">
                        <img src="/img/Front/<?php echo $fcheesecake['img']; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div>
            <div class="gallerys">
                <a href="/Shop/Show#threeShow"><p>Чизкейки</p></a>
                <?php foreach ($fpies as $fpie): ?>
                    <a href="/Shop/Show#threeShow">
                        <img src="/img/Front/<?php echo $fpie['img']; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="gallerys">
                <a href="/Shop/Show#foreShow"><p>Выпечка</p></a>

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