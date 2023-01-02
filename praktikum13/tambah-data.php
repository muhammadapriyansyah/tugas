<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
</head>
<body>
    <h3>Tambah Data Barang</h3>
    <hr/>
    <form action="proses-barang.php?action=add" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>:</td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td><input type="text" name="harga_jual"></td>
            </tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="tombol" value="Simpan"></td>
        </table>
    </form>
</body>
</html>