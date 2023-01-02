<?php
    $password_hash = '$2y$10$BQz2qeZFUNA2WupU9uaOWOH1kgvZSE3bCkmn3NRuu5Lwer38NCYqG';
    $password = "yansyah";
    if (password_verify($password, $password_hash)) {
        echo "Password Valid";
    } else {
        echo "password Tidak Valid";
    }
?>