<?php 
    include('koneksiblob.php');
    $query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
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
    <a href="form_upload.php">Upload Gambar</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Tipe</th>
            <th>Ukuran</th>
            <th>Action</th>
        </tr>
        <?php 
        $no = 1;
        while($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><img src="image-view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100"></td>
                <td><?php echo $row['keterangan'] ?></td>
                <td><?php echo $row['tipe_gambar']; ?></td>
                <td><?php echo $row['ukuran_gambar']; ?></td>
                <td><a href="delete-gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>