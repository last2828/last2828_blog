<?php

require 'components/database.php';
require 'components/auth.php';

$db = new QueryBuilder;
$auth = new Auth($db);

$data = [
    'status' => 1,
    'id' => $_GET['id']
];

$auth->unban('users', $data);

header('location:/blog/'); exit;