<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
$id=$_GET['regid'];
$outuser=mysqli_query($con,"DELETE FROM Registrationlog WHERE Regid='$id'");
header("location:http://localhost/Apartment_Management_System/admin/registerlog.php");
?>
