<?php 
    if(isset($_GET['id_gambar'])) {
        include('koneksiblob.php');
        $id_gambar = $_GET['id_gambar'];
        $query = mysqli_query($koneksi,"delete from tb_gambar where id_gambar='$id_gambar'");
    }
    header('location:tampil-gambar.php');
?>