<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$save="insert into satuan (satuan_id, nama)
	values('".$_POST['satuan_id']."',
			'".$_POST['nama_satauan']."')";
	$proses=mysql_query($save);
	if($proses){
		header("Location:tampil_satuan.php");
	}else{
		echo mysql_errno();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Satuan</td>
			<td><input type="text" name="satuan_id"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama_satauan"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
<a href="menu.php">Menu Utama</a>

