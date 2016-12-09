<?php
require_once('lib/DBClass.php');
require_once('lib/siswa.class.php');
require_once('lib/age.php');

$siswa = new Siswa();
$age = new Age();
$data = $siswa->readAllSiswa();
?>

<table border ='1'>
	<tr>
		<th> ID SISWA </th>
		<th> FULL NAME </th>
		<th> EMAIL </th>
		<th> DATE OF BIRTH </th>
		<th> AGE </th>		
		<th> NATIONALITY </th>
		<th> DETAIL </th>
	</tr>
	<?php foreach ($data as $a):?>
	<tr>
	<td> <?php echo $a ['id_siswa']?> </td>
	<td> <?php echo $a ['full_name']?> </td>
	<td> <?php echo $a ['email']?> </td>
		<td><?php 
			if ($a['date_ob'] != NULL)
			{
				echo $a['date_ob'];
			}
			else
			{
				echo '0000-00-00';
			}?></td>
			<td><?php 
			if ($a['date_ob'] != NULL)
			{
				$tanggal = $a['date_ob'];
				$exec = $age->hitungAge($tanggal);
				echo $exec->y."tahun ".$exec->m." Bulan ".$exec->d."hari";
			}
			else
			{
				echo 'Umur Tidak Diketahui !';
			}?></td>
			<td> <?php echo $a ['nationality']?> </td>

	<td> <a href ="dsiswa.php?id=<?php echo $a['id_siswa']?>">Detail </a></td>
	</tr>
	<?php endforeach ?>
</table>