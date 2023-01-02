<?php
    session_start();
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
    <div class="col-md-9 m-auto card card-header p-1 mb-0 bg-body rounded mt-4">
        <div class="card-header mb-5">
            <h2 class="text-center fw-bold">Data Mahasiswa</h2>
        </div>
        <?php include 'message.php'; ?>
        <table border= "1" cellpadding="5" align = "center" class="table mb-0 table-hover table-striped table-bordered">
            <tr bgcolor = "yellow" align = "center" color = "white" class="table-dark">
                <td>NRP</td>
                <td>Nama</td>
                <td>Fakultas</td>
                <td>Jurusan</td>
                <td>IPK</td>
                <td>Status</td>
                <td>Action</td>
            </tr>

            <?php 
                while ($hasil = mysqli_fetch_array ($query)) {
            ?>
                <tr>
                    <td scope="row"><?php echo $hasil['nrp'] ?></td>
                    <td><?php echo $hasil['nama'] ?></td>
                    <td><?php echo $hasil['fakultas'] ?></td>
                    <td><?php echo $hasil['jurusan'] ?></td>
                    <td><?php echo $hasil['ipk'] ?></td>
                    <td><?php echo $hasil['status'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $hasil['id']; ?>" class="btn btn-warning">EDIT</a>
                        <form action="hapus.php" method="post" class="d-inline">
                            <input type="hidden" name="id" value="<?= $hasil['id']?>">
                            <button class="btn btn-danger" onclick="return confirm('Hapus Data?')">delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div class="card-header mt-3">
            <a href="inputform.php" class="btn btn-success me-3">Tambah Data</a>
        </div>
    </div>
</body>
</html>