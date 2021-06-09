<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<body class="login-page">
    <div class="card" style="width:300px">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <form action="#" method="post">

                <label class="label text-dark">Username</label>
                <input type="text" class="form-control" name="username" required>
                <br>
                <label class="label text-dark">Password</label>
                <input type="password" class="form-control" name="password" required>
                <br>
                <input type="submit" class="btn btn-primary float-right" value="Login">
        </div>
        <div class="card-footer text-center">
            Untuk melakukan Registrasi hubungi rekan yang memiliki Account
        </div>
    </div>
</body>

</html>