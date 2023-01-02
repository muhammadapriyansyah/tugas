<?php
class database{

        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "db_barangku";
        var $koneksi = "";
        function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->username,
            $this->password,$this->database);
            if (mysqli_connect_error()){
                echo "koneksi database gagal : " . mysqli_connect_error();
            }
        }

    function tampil_data() {
        $data = mysqli_query($this->koneksi,"select * from tb_barang");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($nama_barang,$stok,$harga_beli,$harga_jual) {
        mysqli_query($this->koneksi,"insert into tb_barang values ('','$nama_barang',
                                                                   '$stok',
                                                                   '$harga_beli',
                                                                   '$harga_jual')");
    }

    function get_by_id($id_barang)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_barang where id_barang='$id_barang'");
		return $query->fetch_array();
	}
 
	function update_data($nama_barang,$stok,$harga_beli,$harga_jual,$id_barang)
	{
		$query = mysqli_query($this->koneksi,"update tb_barang set nama_barang='$nama_barang',stok='$stok',harga_beli='$harga_beli',harga_jual='$harga_jual' where id_barang='$id_barang'");
	}

    function delete_data($id_barang) {
        $query = mysqli_query($this->koneksi,"delete from tb_barang where id_barang='$id_barang'");
    }

    function register($username,$password,$nama) {
        mysqli_query($this->koneksi,"insert into tb_user values ('','$username',
                                                                 '$password',
                                                                 '$nama')");
    }

    function login($username,$password,$remember) {
        $query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
        $data_user = $query->fetch_array();
        if(password_verify($password,$data_user['password'])) {
            if ($remember) {
                setcookie('username',$username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama',$data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($username) {
        $query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = TRUE;
    }

}
?>