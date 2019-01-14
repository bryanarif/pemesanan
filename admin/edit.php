
<?php
include "koneksi.php";
$id = $_GET['id'];
$qe = mysqli_query($koneksi,"SELECT * FROM data WHERE nik='$id'");
$data =mysqli_fetch_array($qe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <form action="aksi_edit.php" method="post">
        <label>NIK</label>
        <input type="text" name ="nik" value="<?php echo $data['nik'] ?>">
        <br>
        <label>Nama</label>
        <input type="text" name ="nama" value="<?php echo $data['nama'] ?>">
        <br>
        <label>Alamat</label>
        <input type="text" name ="alamat" value="<?php echo $data['alamat'] ?>">
        <br>
        <label>Telepon</label>
        <input type="text" name ="telepon" value="<?php echo $data['telepon'] ?>">
        <label>Detail Pesanan</label>
        <input type="text" name ="detail_pesanan" value="<?php echo $data['detail_pesanan'] ?>">
        <br>
        <label>Tanggal Pesan</label>
        <input type="date" name ="tgl_pesan" value="<?php echo $data['tgl_pesan'] ?>">
        <br>
        <label>Tanggal Ambil</label>
        <input type="date" name ="tgl_ambil" value="<?php echo $data['tgl_ambil'] ?>">
        <br>
        <input type="submit"  placeholder="edit">
    </form>
    
</body>
</html>