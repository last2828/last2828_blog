<?php

require 'components/database.php';     // подключить файл

$db = new QueryBuilder;

$id = $_GET['id'];

$task = $db->getOne('tasks', $id);  //использовать эту функцию из класса

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $task['title'] ?></h1>
                <p><?= $task['content'] ?></p>
                <a href="index.php" class='btn btn-success'>go back</a>
            </div>
        </div>
    </div>
</body>
</html>