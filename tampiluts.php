<?php
include ('koneksiuts.php');
$tampil_data = mysqli_query($b,"select * from cuti");
?>
<table border="1">
<tr>
<td>NIK</td>
<td>Nama</td>
<td>Jabatan</td>
<td>Departemen</td>
<td>Sisa cuti</td>
</tr>
<?php
while ($a= mysqli_fetch_array($tampil_data)) {?>
<tr>				
<td><?php echo $a['NIK'];?></td>
<td><?php echo $a['Nama'];?></td>
<td><?php echo $a['Jabatan'];?></td>
<td><?php echo $a['Departemen'];?></td>
<td><?php echo $a['sisa_cuti'];?></td>
</tr>
<?php }
?>
<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
}
}
?>
</table>