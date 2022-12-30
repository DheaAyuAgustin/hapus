<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<h3>EDIT DATA BARANG</h3>
 
	<?php
	include 'koneksi.php';
	$kode_barang = $_GET['kode_barang'];
	$data = mysqli_query($koneksi,"select * from barang where kode_barang='$kode_barang'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
                <tr>
					<td>kode Barang</td>
					<td>
                        <input type="hidden" name="kode_barang" value="<?php echo $d['kode_barang']; ?>">
                        <input type="text" name="kode_barang" disabled value="<?php echo $d['kode_barang']; ?>"> 
                    </td>
				</tr>
				<tr>
				<tr>			
					<td>Nama Barang</td>
					<td>
						<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
					</td>
				</tr>
                <tr>
					<td>Harga Barang</td>
					<td><input type="number" name="harga_barang" value="<?php echo $d['harga_barang']; ?>"></td>
				</tr>
				<tr>
					<td>
					<td><input type="submit" value="SIMPAN"></td>
					</td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>