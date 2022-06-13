<?php
// $con=mysqli_connect("localhost","root","","student");
include('db.php');
if(!isset($_SESSION['IS_LOGIN']))
{
    header('location:login.php');
    die();
}
$id=$_GET['id'];
mysqli_query($con,"delete from studentinfo where id='$id'");
header('location:index.php');
die();
?>