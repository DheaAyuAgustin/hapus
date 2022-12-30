<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_barang = $_GET['kode_barang'];

// menghapus data ke database
mysqli_query($koneksi,"delete from barang where kode_barang ='$kode_barang'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>