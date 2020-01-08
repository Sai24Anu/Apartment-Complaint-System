<?php
session_start();

include("includes/config.php");
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}

$id=$_GET['Techid'];
$outuser=mysqli_query($con,"DELETE FROM technician WHERE Techid='$id'");
header("location:http://localhost/Apartment_Management_System/admin/managetechnician.php");
?>
