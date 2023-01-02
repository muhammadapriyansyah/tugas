<?php
    session_start();
    include 'koneksi.php';

    $id = $_POST['id'];
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $ipk = $_POST['ipk'];
    $status = $_POST['status'];

    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                fakultas = '$fakultas',
                jurusan = '$jurusan',
                ipk = '$ipk',
                status = '$status'
                WHERE id = $id";
    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        $_SESSION['message'] = "Update Data suksess";
        header("location:tampil.php");
    } else {
        echo "Data Gagal Diubah";
    }

?>