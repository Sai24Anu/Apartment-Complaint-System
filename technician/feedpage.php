<?php
session_start();
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
include("includes/config.php");
$id=$_GET['complainid'];
$sql=mysqli_query($con,"SELECT * from complaint WHERE complaintid='$id'");
$row=mysqli_fetch_array($sql);
 ?>
 <?php include "includes/technav.php" ?>
 <?php include "includes/sidebar.php" ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Feedback</title>
     <style media="screen">
     body{
         background:url(../img/image2.jpg);
         background-size:cover;
       font-family:Arial;
       font-family: 'Poppins', sans-serif;
     }
       .bod{
         padding-left: 500px;
         width: 50%;
         font-size: 35px;

       }
     </style>
   </head>
   <body>
     <div class="bod">
       <?php
       $fed=$row['feedback'];
       echo "<b>$fed</b>"; ?>

     </div>
   </body>
 </html>
