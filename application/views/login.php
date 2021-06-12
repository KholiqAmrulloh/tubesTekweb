<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
    <style>
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .image {
            background-image: url(<?php echo base_url("assets/image/bglogin.jpg"); ?>);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>

<body class="login-page image">
    <div class="card" style="width:300px">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <form action="login/proseslogin" method="post">

                <label class="label text-dark">Username</label>
                <input type="text" class="form-control" name="username" required>
                <br>
                <label class="label text-dark">Password</label>
                <input type="password" class="form-control" name="password" required>
                <br>
                <?php echo $this->session->userdata("error"); ?>
                <br>
                <input type="submit" class="btn btn-primary float-right" value="Login">
        </div>
        <div class="card-footer text-center">
            Untuk melakukan Registrasi hubungi rekan yang memiliki Account
        </div>
    </div>
</body>

</html>