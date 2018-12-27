<?php

require 'components/database.php';             // подключить файл

$db = new QueryBuilder;

$data = [
        'id' => $_GET['id'],
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ];


$db->update('tasks', $data);             //использовать эту функцию из класса

header('location:/blog'); exit;     // вернуться на главную страницу