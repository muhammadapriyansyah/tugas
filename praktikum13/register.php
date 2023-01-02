<?php
    include('koneksi.php');
    $database = new database();
    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $nama = $_POST['nama'];
        if ($database->register($username,$password,$nama)) {
            header('location:login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>Register Form</title>
    <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
    <link rel="stylesheet" href="assets/css/sticky-footer.css">
</head>
<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Register Form</h1>
            <p class="lead">Silakan Daftarkan Identitas Anda</p>
            <hr>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"> 
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <div class="form-group row">
                    <div>
                        <a href="login.php" class="btn btn-success">Login</a>
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class=" text-center">Pemrograman Web Dinamis</span>
        </div>
    </footer>
</body>
</html>