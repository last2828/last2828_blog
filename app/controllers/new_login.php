<?php

session_start();

use \Delight\Auth\Auth;

$pdo = new PDO('mysql:host=localhost; dbname=tasks', 'root', 'root');

$auth = new Auth($pdo);

try {
    $auth->login($_POST['email'], $_POST['password']);

    header('location:/web/'); exit;

}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Wrong email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Wrong password');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) {
    die('Email not verified');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}