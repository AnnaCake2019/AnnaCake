<?php 

mail('confectioneryspb1@yandex.ru', 'Заказ пользователя', 
	"С сайта AnnaCake.ru был получен заказ:
	\nВыпечка:
	\n$_POST[bakeryOffer]

	\nТорты:
	\n$_POST[cakeOffer]
	
	\nЧизкейки:
	\n$_POST[cheesecakeOffer]

	\nКейки:
	\n$_POST[pieOffer]

	\nОбщая сумма: $_POST[summ]
---------------------------
	\nИмя заказчика: $_POST[name]
	\nТелефон заказчика: $_POST[tel]"
	, 'From: confectioneryspb1@yandex.ru');

 ?>