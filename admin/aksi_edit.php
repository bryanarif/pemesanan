<?php 
include 'koneksi.php';


$nik         = $_POST['nik'];
$nama      = $_POST['nama'];
$alamat     = $_POST['alamat'];
$telepon   = $_POST['telepon'];
$detail_pesanan=$_POST['detail_pesanan';]
$tgl_pesan   = $_POST['tgl_pesan'];
$tgl_ambil   = $_POST['tgl_ambil'];


// query SQL untuk insert data
$query="UPDATE `data` SET `nik` = '$nik', `nama` = '$nama', `alamat` = '$alamat', `telepon` = '$telepon', `$detail_pesanan` = '$tgl_pesan', `tgl_ambil` = '$tgl_ambil' WHERE `nik` = $nik";
mysqli_query($koneksi, $query);

header('location:homepage.php');
?>
