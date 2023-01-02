<?php
    session_start();
    include 'koneksi.php';
    
    $id = $_POST['id'];

    $hapus = "DELETE FROM mahasiswa WHERE id = '$id' ";
    $result = mysqli_query($conn, $hapus);

    if ($result) {
        $_SESSION['message'] = "Hapus Data Berhasil!";
        header("location:tampil.php");
    } else {
        echo "gagal";
    }
?>