<?php 
    session_start();
    include_once('koneksi.php');
    $database = new database();

    if(isset($_SESSION['is_login'])) {
        header('location:home.php');
    }

    if(isset($_COOKIE['username'])) {
        $database->relogin($_COOKIE['username']);
        header('location:home.php');
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_POST['remember'])) {
            $remember = TRUE;
        } else {
            $remember = FALSE;
        }

        if($database->login($username,$password,$remember)) {
            header('location:home.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="assets/css/signin.css">
</head>
<body class="d-flex flex-column h-100">
    <form class="form-sigin" action="" method="post">
        <img class="mb-4" src="assets/css/bootstrap-solid.svg" alt="" width="72">
        <h1 class="h3 mb-3 font-weight-normal">Please Sign in</h1>
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>

        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" name="remember"> Remember Me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
        <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
        <p class="mt-5 mb-3 text-muted">Pemrograman WWeb Dinamis - Muhammad Apriyansyah</p>
    </form>
</body>
</html>