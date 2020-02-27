<?php
include('koneksi.php');
//SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;
//join dengan satuan dan kategori
$tampil_barang = mysql_query("select id_barang, nama_barang, ktg.nama, stn.nama_satuan
							from barang as br 
							inner join kategori as ktg on br.id_barang=ktg.id_kategori
							inner join satuan as stn on br.id_barang=stn.id_satuan");
?>
<table border="1">
	<tr>
		<td>ID Barang</td>
		<td>Nama Barang</td>
		<td>Nama Kategori</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_barang)) { ?>
	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="menu.php">Menu Utama</a>

