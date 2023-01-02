<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tambah</title>
</head>
<body>
<div class="col-10 m-auto">
		<h2 class="text-center fw-bold">Tambah Data Mahasiswa</h2>
		<div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
			<form action="simpandata.php" method="post" class="need-validated">
				<input type="hidden" name="id" value="<?= $data['id'] ?>">
				<div class="mb-3 form-group was-validated">
					<label class="form-label" id="nrp">NRP</label>
					<input type="text" class="form-control" name="nrp" required>
					<div class="invalid-feedback">
                    	Masukan NRP
                	</div><br>

					<label class="form-label" id="nama">Nama</label>
					<input type="text" class="form-control" name="nama" required>
					<div class="invalid-feedback">
                    	Masukan Nama
                	</div><br>

					<label class="form-label" id="fakultas">Fakultas</label>
					<input class="form-control" type="text" name="fakultas" required>
					<div class="invalid-feedback">
                    	Masukan fakultas
                	</div><br>

					<label class="form-label" id="jurusan">Jurusan</label>
					<input class="form-control" type="text" name="jurusan" required>
					<div class="invalid-feedback">
                    	Masukan  Jurusan
                	</div><br>

					<label class="form-label" id="ipk">IPK</label>
					<input class="form-control" type="text" name="ipk" required>
					<div class="invalid-feedback">
                    	Masukan IPK
                	</div><br>

					<label class="form-label" id="status">Status</label>
					<input class="form-control" type="text" name="status" required>
					<div class="invalid-feedback">
                    	Masukan Status
                	</div>

				</div>
                <button class="btn btn-success" type="submit" name="input" onclick="return confirm('simpan data?')" >Input</button>
                <button class="btn btn-danger mx-3" type="reset" name="reset" >Batal</button>
                <a href="tampil.php" class="btn btn-warning">Kembali</a>
            </form>
</body>
</html>