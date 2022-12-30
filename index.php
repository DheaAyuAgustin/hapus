<?php
 include "koneksi.php";
?>

<html>
    <head>
        <title> Transaksi </title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>NAMA BARANG</td>
                <td>NO PESANAN</td>
                <td>QTY</td>
                <td>HARGA</td>
                <td>TANGGAL</td>
                <td>AKSI</td>
            </tr>
<?php
        $query=mysqli_query($koneksi,'SELECT Tabel_barang.Nama_Barang,Tabel_Detail_Barang.No_Pesenan,Tabel_Detail_Barang.Qty,Tabel_Detail_Barang.Harga,Tabel_transaksi.Tanggal FROM Tabel_barang Inner Join Tabel_Detail_Barang ON Tabel_barang.Kode_Barang = Tabel_Detail_Barang.Kode_Barang Inner Join Tabel_transaksi ON Tabel_Detail_Barang.No_Pesenan = Tabel_transaksi.No_Pesenan');
        while ($data=mysqli_fetch_array($query)){
    ?>
             <tr>
                <td><?php echo $data['Nama_Barang']?></td>
                <td><?php echo $data['No_Pesenan']?></td>
                <td><?php echo $data['Qty']?></td>
                <td><?php echo $data['Harga']?></td>
                <td><?php echo $data['Tanggal']?></td>
                <td>
                    <a href="edit.php?Nama_Barang=<?php echo $data['Nama_Barang']; ?>">Edit</a>
                    <a href="hapus.php?Nama_Barang=<?php echo $data['Nama_Barang']; ?>">Hapus</a>
                </td>
            </tr>
            
 
            
            <?php
        }
            ?>
        
            
        </table> 
        <a href="tambah.php">TAMBAH DATA</a>
    </body>
</html>