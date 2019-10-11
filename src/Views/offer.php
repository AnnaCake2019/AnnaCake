<?php 

mail('example@gmail.com', 'Заказ пользователя', "С сайта AnnaCake.ru был получен заказ:\n\nВыпечка:\n$_POST[bakeryOffer]", 'From: example@gmail.com');

 ?>