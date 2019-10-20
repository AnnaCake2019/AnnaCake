<?php 

mail('confectioneryspb1@yandex.ru', 'Вопрос пользователя', "С сайта AnnaCake.ru была получена анкета с данными: \n\n\n Телефон: $_POST[phone] \n Имя: $_POST[name] ", 'From: confectioneryspb1@yandex.ru');

 ?>