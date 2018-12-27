<?php

use last\QueryBuilder;

//require '../models/database.php';                     // подключить файл

$db = new QueryBuilder;

$data = [
    'title' => $_POST['title'],
    'content' => $_POST['content']
];

$db->add('tasks', $data);                        //использовать эту функцию из класса

header('location:/web/'); exit;   // вернуться на главную страницу
