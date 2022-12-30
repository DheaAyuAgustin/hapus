<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode = $_GET['kode'];
$no_pesanan = $_GET['no_pesanan'];
$tanggal = $_GET['tanggal'];
$kode_barang = $_GET['kode_barang'];
$nama_barang = $_GET['nama_barang'];
$harga_barang = $_GET['harga_barang'];
$quantity = $_GET['quantity'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tabel_detail where kode='$kode'");
mysqli_query($koneksi,"delete from transaksi where no_pesanan='$no_pesanan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>