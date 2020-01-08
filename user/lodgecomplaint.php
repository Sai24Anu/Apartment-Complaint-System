<?php
session_start();

include("includes/config.php");


if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
if(isset($_POST['submit']))
{
  $id=$_SESSION['login'];
  $ret=mysqli_query($con,"SELECT * FROM user WHERE userEmail='$id'");
  $row = mysqli_fetch_array($ret);
  $userid=$row['Userid'];
  $feild=$_POST['feild'];
  $noc=$_POST['noc'];
  $desc=$_POST['desc'];
  $status='Not Processed';
  $ins = "INSERT INTO complaint (Userid,ComplaintType,noc,ComplaintDesc,status,fedstat)
VALUES ('$userid','$feild','$noc','$desc','$status','0')";
if (mysqli_query($con, $ins))
  {
  echo "<script>alert('Complaint Filed Successfully'); window.location.href='http://localhost/Apartment_Management_System/user/dashboard.php';</script>";
  } else {
    echo "Error: " . $ins . "<br>" . mysqli_error($con);
}

}
 ?>
 <?php include "includes/usernav.php" ?>
 <?php include "includes/sidebar.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge complaint</title>
    <style media="screen">
    body{
        background:url(../img/image2.jpg);
        background-size:cover;
      font-family:Arial;
      font-family: 'Poppins', sans-serif;
    }
      .bod{

      padding-left: 350px;
      align-items: center;
      }
      .fom{
        padding-left: 300px;
      }
      a{
        text-decoration: none;
        color: black;
      }
      select{
        width: 3  50px;
        height: 50px;
        background-color: #222222;
        color: white;
        font-size: 20px;
      }
      .fom input{

          height: 45px;
        box-sizing:border-box;
        width: auto;
      outline:none;
      border:none;
      text-align: center;
      border-bottom:1px  #fff;
      border-radius:15px;
        font-size: 20px;
       font-weight:bold;
      }
      .fom input[type="submit"]
      {
       border: none;
       outline: none;
       height: 40px;
       width: 100px;
       background: #abd;
       font-size: 16px;
       border-radius: 15px;
      }

    @media screen and (max-width:768px)
    {

      .bod{
        padding: 10px;
      }
      .fom{
        padding-left: 10px;
      }
      .fom input{
      width: 350px;
    }
  }
    </style>
  </head>
  <body>
    <div class="bod">
      <h1> >Register Complaint</h1>
        <br>
        <br>
      <div class="fom">
        <form class="login" name="login" method="post" autocomplete="off">
          <h2>Complaint Type:</h2 >
          <select  name="feild" placeholder ="Select" required>
            <option value="">Type</option>
            <option value="electrician">Electrician</option>
            <option value="mechanic">Mechanic</option>
            <option value="plumber">Plumber</option>
            <option value="machinery">machinery</option>
            <option value="carpenter">Carpenter</option>
            <option value="cleaning">Deep Cleaning</o ption>
          </select>
          <br>
          <br>
          <h2>Nature Of Complaint:</h2>
          <input type="text" name="noc" value="" required>
          <br>
          <br>
          <h2>Complaint description:<h4>(max 2000 words)</h4></h2>

           <textarea name="desc" rows="10" cols="30" maxlength="2000"></textarea>
           <br>
           <br>
           <input type ="submit" name="submit" value="submit">
        </form>

      </div>
    </br>



    </div>
  </body>
</html>
