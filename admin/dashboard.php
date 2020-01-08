<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
include("includes/config.php");
$result=mysqli_query($con,"SELECT count(*) as total from complaint ");
$data=mysqli_fetch_assoc($result);
$res=mysqli_query($con,"SELECT count(*) as total from user ");
$dat=mysqli_fetch_assoc($res);
$ret=mysqli_query($con,"SELECT count(*) as total from technician ");
$dats=mysqli_fetch_assoc($ret);
$rt=mysqli_query($con,"SELECT count(*) as total from Registrationlog ");
$dt=mysqli_fetch_assoc($rt);

 ?>
 <?php include "includes/adminnav.php" ?>
 <?php include "includes/sidebar2.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style media="screen">
    body{
        background:url(../img/image2.jpg);
        background-size:cover;
      font-family:Arial;
      font-family: 'Poppins', sans-serif;
    }
      .bod{

      padding-left: 400px;
      align-items: center;
      }
      .column{
        float: left;
        margin-right: 50px;
        border-radius: 20px;
        box-shadow: 10px 10px 5px grey;
        height: 35%;
        padding-right: 20px;
        width: 20%;
      }
      .column h1{
          text-align: center;
          padding-top: 120px;
      }
      a{
        text-decoration: none;
        color: black;
      }
      .elem{
        justify-content: space-around;
      }
    @media screen and (max-width:768px)
    {
      .bod{
        padding: 0;
      }
      .column{
        float: left;
        margin-right: 10px;
        border-radius: 20px;

        height: 20%;
        padding-right: 20px;
        width: 22%;

      }
      .column h1{
          text-align: center;
          padding-top: 20px;
          font-size: 15px;

      }

    }
    </style>
  </head>
  <body>
    <div class="bod">
      <h1>Welcome Admin</h1>
    </br>

    <div class="elem">
      <a href="#">
      <div class="column" style="background-size: 390px 250px; background-color: red;">
        <h1>No of Complaints : <?php echo $data['total']; ?>  </h1>
      </div>
      </a>
      <a href="http://localhost/Apartment_Management_System/admin/manageuser.php">
      <div class="column" style="background-color: green;">
        <h1>No of Users : <?php echo $dat['total']; ?></h1>
      </div>
    </a>
    <a href="http://localhost/Apartment_Management_System/admin/managetechnician.php">
      <div class="column" style="background-color: blue;">
        <h1>No of Technician: <?php echo $dats['total']; ?></h1>
      </div>
    </a>
    <a href="http://localhost/Apartment_Management_System/admin/registerlog.php">
      <div class="column" style="background-color: yellow;">
        <h1>Application for registration: <?php echo $dt['total']; ?></h1>
      </div>
    </a>
    </div>

    </div>
  </body>
</html>
