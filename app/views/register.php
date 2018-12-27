<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Enter your info</h1>
                <form action="/web/new_user" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class='form-control' name='password'>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit">new account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>