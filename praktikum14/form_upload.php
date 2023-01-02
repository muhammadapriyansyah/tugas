<?php 
    include('koneksiblob.php');
    if(isset($_POST['tombol'])) {
        if(!isset($_FILES['gambar']['tmp_name'])) {
            echo '<span style="color: red;"><b><u><i>Pilih file gambar</i></u></b></span>';
        } else {
            $file_name = $_FILES['gambar']['name'];
            $file_size = $_FILES['gambar']['size'];
            $file_type = $_FILES['gambar']['type'];

            if($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')) {
                $image = addcslashes(file_get_contents($_FILES['gambar']['tmp_name']));
                $keterangan = $_POST['keterangan'];
                mysqli_query($koneksi,"insert into tb_gambar (gambar,nama_gambar,tipe_gambar,ukuran_gambar,keterangan) values ('$image','$file_name','$file_type','$file_size','$keterangan')");
                header('location:tampil-gambar.php');
            } else {
                echo '<span style="color:red"><b><u><i>Ukuran File / Tipe File Tidak Sesuai</i></u></b></sapan>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web Dinamis</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="post">
        <table>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"></td>
            </tr>
        </table>
    </form>
</body>
</html>