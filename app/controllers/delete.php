<?php

//require 'components/database.php';             // подключить файл

$db = new QueryBuilder;

$id = $_GET['id'];

$db->delete('tasks', $id);               //использовать эту функцию из класса

header('location:/blog'); exit;     // вернуться на главную страницу
