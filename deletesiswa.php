<?php
require_once('lib/DBClass.php');
require_once('lib/siswa.class.php');

$id = $_GET['id'];

if (!is_numeric($id)) {
	exit('Access Forbiden');
}

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)) {
	Echo"Data Berhasil Dihapus";
}

?>
<br/>
<a href ="siswa.php">Kembali</a>