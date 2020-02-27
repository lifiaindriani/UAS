<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$save="insert into kategori (kategori_id, nama)
	values('".$_POST['kategori_id']."',
			'".$_POST['nama']."')";
	$proses=mysql_query($save);
	if($proses){
		header("Location:tampil_kategori.php");
	}else{
		echo mysql_errno();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Kategori</td>
			<td><input type="number" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
<a href="menu.php">Menu Utama</a>