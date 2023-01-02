<?php 
	include 'koneksi.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM mahasiswa where id ='$id' ";
	$hasil = mysqli_query ($conn, $query);
	$data = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah</title>
</head>
<body>
    <div class="col-10 m-auto">
		<h2 class="text-center fw-bold">Update Data Mahasiswa</h2>
		<div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
			<form action="editproses.php" method="post">
				<input type="hidden" name="id" value="<?= $data['id'] ?>">
				<div class="mb-3">
					<label class="form-label" id="nrp">NRP</label>
					<input type="text" class="form-control" name="nrp" value="<?= $data['nrp']?> " ><br>

					<label class="form-label" id="nama">Nama</label>
					<input type="text" class="form-control" name="nama" value="<?= $data['nama']?>" ><br>

					<label class="form-label" id="fakultas">Fakultas</label>
					<input class="form-control" type="text" name="fakultas" value="<?= $data['fakultas']?>" ><br>

					<label class="form-label" id="jurusan">Jurusan</label>
					<input class="form-control" type="text" name="jurusan" value="<?= $data['jurusan']?>"><br>

					<label class="form-label" id="ipk">IPK</label>
					<input class="form-control" type="text" name="ipk" value="<?= $data['ipk']?>" ><br>

					<label class="form-label" id="status">Status</label>
					<input class="form-control" type="text" name="status" value="<?= $data['status']?>" ><br>
				</div>
				<button class="btn btn-warning" type="submit" name="input" >Input</button>
				<a href="tampil.php" class="btn btn-danger">Kembali</a>
			</form>
		</div>
	</div>
</body>
</html>