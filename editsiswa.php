<?php
require_once('lib/DBClass.php');
require_once('lib/siswa.class.php');

if (!isset($_POST['kirim'])) {
	exit('Access Forbiden');
}

$siswa = new Siswa();

if($_FILES['in_foto']['error']==0){
	if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.bmp')) {
		exit('error upload file');
	}
}

$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['input_foto'] = 'img/'.$_POST['in_nis'].'.bmp';

$siswa->updateSiswa($_POST['in_nis'], $data);

echo "Data siswa berhasil di update <br />";
echo "<a href ='dsiswa.php?id=".$_POST['in_nis']."'>DETAIL SISWA</a>"
?>