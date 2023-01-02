<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "unpas";
    
    $conn = mysqli_connect($server, $user, $pass, $dbname);
    
    if (!$conn) {
        die("<script> alert('Gagal tersambung dengan database')</script>");
    }
?>