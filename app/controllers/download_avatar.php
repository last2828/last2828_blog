<?php

session_start();

require ('components/database.php');
require ('components/auth.php');

$db = new QueryBuilder;
$auth = new Auth($db);


$data = [
    'img' => $_FILES['uploadfile']['name'],
    'id' => $_GET['id']
];

$uploadAvatar = $auth->uploadAvatar('avatars/', $data);

if($uploadAvatar)
{
    header('location:/blog/'); exit;
}else{
    echo 'Ошибка загрузки';
}

