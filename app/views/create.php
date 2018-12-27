<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create task</h1>
                <form action="/web/create" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>