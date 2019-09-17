<?php 

mail('example@gmail.com', 'Вопрос пользователя', "С сайта AnnaCake.ru была получена анкета с данными: \n\n\n Телефон: $_POST[phone] \n Имя: $_POST[name] ", 'From: example@gmail.com');

 ?>