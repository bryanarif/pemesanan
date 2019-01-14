<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Bootstrap Admin Template : Binary Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Amanah</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">  <a href="home.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.jpg" class="user-image img-responsive"/>

                        <li>
                            <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                        </li>         
                    </li>

                    <li>
                        <a class="active-menu"  href="home.html"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                    </li>       
                    <li>
                        <a   href="kain.html"><i class="fa fa-laptop fa-3x"></i> kain</a>
                    </li>   
                    <li>
                        <a   href="pesan.php"><i class="fa fa-laptop fa-3x"></i> pesan</a>
                    </li> 

                    <li >
                        <a  href="portofolio.html"><i class="fa fa-square-o fa-3x"></i> Portofolio</a>
                    </li>   

                </div>

            </nav>  
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                           <table align="center" border="0">
                            <form method="post" enctype="multipart/form-data">
                                <tr>
                                    <td colspan="3"><h3>FORM PEMESANAN</h3></td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td> 
                                    <td><input type="text" name ="nik" placeholder="nik"></td>
                                </tr>
                                <tr>
                                    <td>NAMA </td>
                                    <td>: </td>
                                    <td>
                                        <input type="text" name ="nama" placeholder="Nama">
                                    </td>
                                </tr>
                                <tr>
                                    <td>ALAMAT</td>
                                    <td>:</td>
                                    <td><textarea name ="alamat" placeholder="alamat"></textarea></td>
                                </tr>
                                <tr>
                                    <td>TELEPON</td>
                                    <td>:</td>
                                    <td><input type="text" name ="telepon" placeholder="telepon"></td>
                                </tr>
                                <tr>
                                    <td>DETAIL PESANAN</td>
                                    <td>:</td>
                                    <td><textarea name ="detail_pesanan" placeholder="jeniskain, jumlah pesanan"></textarea></td>
                                </tr>
                                <tr>
                                    <td>TANGGAL PESAN</td>
                                    <td>:</td>
                                    <td><input type="date" name ="tgl_pesan" placeholder="tanggal pesan"></td>
                                </tr>
                                <tr>
                                    <td>TANGGAL AMBIL</td>
                                    <td>:</td>
                                    <td><input type="date" name ="tgl_ambil" placeholder="tanggal ambil"></td> 
                                </tr>
                                <tr>
                                    <td>Upload Desain</td>
                                    <td>:</td>
                                    <td><input type="file" name ="file"></td> 
                                </tr>

                                <tr>
                                    <td><input type="submit" name ="submit" placeholder="simpan"></td>
                                </tr>
                                
                            </form>

                            <?php
                            if (isset ($_POST['submit']))
                            {
                                $nik = $_POST['nik'];
                                $nama = $_POST['nama'];
                                $alamat = $_POST['alamat'];
                                $telepon = $_POST['telepon'];
                                $detail_pesanan=$_POST['detail_pesanan'];
                                $tgl_pesan = $_POST['tgl_pesan'];
                                $tgl_ambil = $_POST['tgl_ambil'];

                            // variable buat nampung form upload
                            //mengambil nama dari file nya
                                $file_name = $_FILES['file']['name'];
                            // mengambil type dari file
                                $file_type = $_FILES['file']['type'];
                            //mengambil ukuran file
                                $file_size = $_FILES['file']['size'];
                            // mengambil nama file yg brada dalam directori server
                                $file_tem_loc = $_FILES['file']['tmp_name'];
                            // lokasi penyimpanan, karena file pesan.php berada dalam 1 folder yg sama dengan folder upload. maka langsung di panggil aja nama foldernya.
                                $file_store = "upload/".$file_name;

                                move_uploaded_file($file_tem_loc, $file_store);

                                $submit = mysqli_query($koneksi,"INSERT INTO data VALUES('$nik','$nama','$alamat','$telepon','detail_pesanan','$tgl_pesan','$tgl_ambil','$file_store')");
                                if ($submit){
                                    echo "pemesanan anda telah berhasil";
                                }else{
                                    echo "Gagal menambah data ";
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
