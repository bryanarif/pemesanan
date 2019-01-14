<?php 
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$user= 'user';

if( isset($_POST['username']) )
{
     mysqli_query($koneksi, "INSERT INTO login VALUES('', $username','$password', 'user')");
     header("location:index.php");
}
?>