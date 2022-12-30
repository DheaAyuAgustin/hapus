<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];

 
// menginput data ke database
mysqli_query($koneksi,"update barang set kode_barang = '$kode_barang', nama_barang = '$nama_barang', harga_barang = '$harga_barang' where kode_barang='$kode_barang'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>