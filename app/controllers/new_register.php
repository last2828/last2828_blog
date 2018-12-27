<?php

use \Delight\Auth\Auth;

$pdo = new PDO('mysql:host=localhost; dbname=tasks', 'root', 'root');
$auth = new Auth($pdo);

$auth->confirmEmail(UiymsNgjLsDQtje9, sgwRclUwY02h7Yar);
//UiymsNgjLsDQtje9 sgwRclUwY02h7Yar
try {
    $userId = $auth->register($_POST['email'], $_POST['password'], null, function ($selector, $token) {
        $url = \urlencode($selector) . ' ' . \urlencode($token);
        var_dump($url); die;

    });

    echo 'We have signed up a new user with the ID ' . $userId; ?> <a href="/web/">go back</a>
        <?php
}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Invalid email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Invalid password');
}
catch (\Delight\Auth\UserAlreadyExistsException $e) {
    die('User already exists');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}