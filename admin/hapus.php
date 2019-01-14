<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM data WHERE nik='$id'")or die(mysql_error());
header("location:index.php");
?> 


