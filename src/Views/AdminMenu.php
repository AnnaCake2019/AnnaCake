<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/forAdmin.css">
    <link rel="stylesheet" href="/css/croppic.css">
    <script src="/js/croppic.js"></script>
</head>
<body>
<a class="exit" href="/Index/index">Выход</a>
<div class="row">
    <div class="offset-2 col-8 menuAdm">
        <ul>
            <li><a href="/Admin/Account">Front Picture</a></li>
            <li><a href="/Admin/Cake">Торты</a></li>
            <li><a href="/Admin/Cheesecake">Чизкейки</a></li>
            <li><a href="/Admin/Pie">Кейки</a></li>
            <li><a href="/Admin/Bakery">Выпечка</a></li>
            <li><a href="/Admin/Basked">Корзины</a></li>
        </ul>
    </div>
</div>
<?php include_once $content ?>
</body>
</html>
