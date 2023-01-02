<?php 
    include('koneksiblob.php');
    require_once("dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $query = mysqli_query($koneksi,"select * from tb_barang");
    $html = '<center><h3>Daftar Barang</h3></center><hr><br?>';
    $html .= '<table border="1" width="100%">
    <tr>
    <th>No</th>
    <th>Barang</th>
    <th>Stok</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    </tr>';
    $no = 1;
    while($row = mysqli_fetch_array($query)) {
        $html .= "<tr>
        <td>".$no."</td>
        <td>".$row['nama_barang']."</td>
        <td>".$row['stok']."</td>
        <td>".$row['harga_beli']."</td>
        <td>".$row['harga_jual']."</td>
        </tr>";
        $no++;
    }
    $html .= "</html>";
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'potrait');
    $dompdf->render();
    $dompdf->stream('laporan-barang.pdf',array("Attachment"=>0));
?>