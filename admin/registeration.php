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
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Register</h2>
                
                <h5>( Register yourself to get access )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>  New User ? Register Yourself </strong>  
                    </div>
                    <div class="panel-body">
                        <form role="form" action="proses_register.php" method="POST">
                            <br/>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                <input name="username" type="text" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input name="password" type="text" class="form-control" placeholder="Desired Username" />
                            </div>
                            
                            <button type="submit" class="button">Register</button>
                            <hr/>

                            Already Registered ?  <a href="index.php" >Login here</a>
                        </form>

                        <?php
                        // if (isset ($_POST['submit']))
                        // {
                        //     $username = $_POST['username'];
                        //     $password = $_POST['password'];

                        //     $submit = mysqli_query($koneksi,"INSERT INTO register VALUES('$username','$password')");
                        //     if ($submit){
                        //         echo "registrasi telah berhasil";
                        //     }else{
                        //         echo "Gagal registrasi ";
                        //     }
                        // }
                        ?>

                    </div>

                </div>
            </div>    
        </div>
    </div>


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
