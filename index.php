<!DOCTYPE html >
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <?php
                    if ($auth->isLoggedIn()) {
                ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All tasks</h1>
            <a href="/web/new_task" class="btn btn-success">ADD TASK</a>
            <a href="/web/logout" class='btn btn-warning'>LOGOUT</a>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task['id']; ?></td>
                        <td><?= $task['title']; ?></td>
                        <td>
                            <a href="app/views/show.php?id=<?= $task['id'] ?>" class="btn btn-info">show</a>
                            <a href="app/views/edit.php?id=<?= $task['id'] ?>" class="btn btn-warning">edit</a>
                            <a onclick="return confirm('are you sure?');" href="app/controllers/delete.php?id=<?= $task['id'] ?>"
                               class="btn btn-danger">delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php }else{?>
        <a href="/web/login" class='btn btn-success'>LOGIN</a>
        <a href="/web/registration" class='btn btn-info'>REGISTER</a>
    <?php }?>
</div>
</body>
</html>
