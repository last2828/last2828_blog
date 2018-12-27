<?php

require 'components/database.php';
require 'components/auth.php';

$db = new QueryBuilder;
$auth = new Auth($db);

$data = [
    'status' => 0,
    'id' => $_GET['id']
];

$auth->ban('users', $data);

header('location:/blog/'); exit;