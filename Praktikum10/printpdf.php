<?php
    include 'koneksi.php';

    $query = mysqli_query($conn, 'SELECT * FROM mahasiswa');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <title>Document</title>
</head>
<body>
    <div class="col-md-20 m-7  mb-5 bg-body rounded">
        <h2 class="text-center fw-bold">Data Mahasiswa</h2>
        <table border= "1" cellpadding="5" align = "center" class="table mb-0 table-hover table-striped table-bordered">
            <tr bgcolor = "yellow" align = "center" color = "white" class="table-dark">
                <td>NRP</td>
                <td>Nama</td>
                <td>Fakultas</td>
                <td>Jurusan</td>
                <td>IPK</td>
                <td>Status</td>
            </tr>

            <?php 
                while ($hasil = mysqli_fetch_array ($query)) {
            ?>
                <tr bgcolor = "aqua">
                    <td scope="row"><?php echo $hasil['nrp'] ?></td>
                    <td><?php echo $hasil['nama'] ?></td>
                    <td><?php echo $hasil['fakultas'] ?></td>
                    <td><?php echo $hasil['jurusan'] ?></td>
                    <td><?php echo $hasil['ipk'] ?></td>
                    <td><?php echo $hasil['status'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <a href="tampil.php" class="btn btn-warning">Kembali</a>
        <a href="printpdf.php" class="btn btn-warning">Print Lagi</a>
        <script>
            window.print();
        </script>
    </div>
    
</body>
</html>