<?php
include('koneksi.php');
$tampil_kategori = mysql_query("select * from kategori");
?>
<table border="1">
	<tr>
		<td>ID Kategori</td>
		<td>Nama Kategori</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_kategori)) { ?>
	<tr>
		<td><?php echo $data['kategori_id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="menu.php">Menu Utama</a>