<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <form action="api/logout" method="POST">
            @csrf





            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
</body>

</html>