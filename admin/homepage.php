﻿<?php
session_start();
include "koneksi.php";

if (@$_SESSION['level'] == 'user') {
  header('Location: pesan.php');
}

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
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
        <a class="navbar-brand" href="index.html">Admin</a> 
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
            <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          </li>


          <li>
            <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
          </li>			
          
        </ul>

      </div>
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
           <h2>Admin Dashboard</h2>   
         </div>
       </div>              
       <!-- /. ROW  -->
       <hr /> 
       <div class="panel panel-default">
        <div class="panel-heading">


          <div class="container">
           <div class="row">
            <div class="col-lg-12 text-center">
              <table align="center" border="3" width="50%">
                <tr>
                  <td colspan="8" bgcolor="#C90000"><h3><font color= #ffffff>Data Pelanggan</h3>
                  </tr>
                  <tr bgcolor="#000000">
                    <font color =#ffffff>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Detail Pesanan</th>
                    <th>Tanggal Pesan</th>
                    <th>Tanggal Ambil</th>
                    <th>Opsi</th>
                  </tr>

                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM data");
                  while($tampil = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>

                      <td><?php echo $tampil['nik']; ?></td>

                      <td><?php echo $tampil['nama']; ?></td>

                      <td><?php echo $tampil['alamat']; ?></td>

                      <td><?php echo $tampil['telepon']; ?></td>
                    <td><?php echo $tampil['detail_pesanan'] ?></td>
                      <td><?php echo $tampil['tgl_pesan']; ?></td>

                      <td><?php echo $tampil['tgl_ambil']; ?></td>


                      <td>

                        <a href="hapus.php?id=<?php  echo $tampil['nik'];?>"
                          onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus</a>

                          <a href="edit.php?id=<?php echo $tampil['nik'];?>"> Edit</a>     
                          
                        </td>
                        
                      </tr>
                    <?php } ?>


                  </tr>
                </td>
              </tr>

            </table>
          </div>
        </div>
      </div>
      <div class="panel-body">
        <div id="morris-donut-chart"></div>
      </div>
    </div>

  </div>
</div>     
<!-- /. ROW  -->           
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
<!-- MORRIS CHART SCRIPTS -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script 
</body>
</html>