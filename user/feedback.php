<?php
session_start();
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
include("includes/config.php");
if(isset($_POST['submit'])){
  $id=$_GET['complainid'];
  $text=$_POST['feed'];
  $one=1;
  $sql=mysqli_query($con,"update complaint set feedback='$text',fedstat='$one' where complaintid='$id'");
  echo "<script> alert('Thanks for feedback');window.location.href='http://localhost/Apartment_Management_System/user/complainthistory.php'</script>";
}
 ?>
 <?php include "includes/usernav.php" ?>
 <?php include "includes/sidebar.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      }
      a{
        text-decoration: none;
        color: black;
      }
      .bod textarea{
        box-sizing:border-box;
        width: auto;
      outline:none;
      border:none;
      font-size: 18px;
      border-bottom:1px  #fff;
      border-radius:15px;
        font-size: 20px;
       font-weight:bold;
      }
      .bod input[type="submit"]
      {
       border: none;
       outline: none;
       height: 40px;
       width: 100px;
       color: white;
       cursor: pointer  ;
       background: #222;
       font-size: 16px;
       border-radius: 15px;
      }
      @media screen and (max-width:768px)
      {

        .bod{
          padding: 10px;
        }
        .bod{
          padding-left: 10px;
        }
        .bod textarea{
        width: 350px;
      }
    }
    </style>
  </head>
  <body>
    <div class="bod">
      <h1>>Feedback</h1>
      <br>
      <br>
    <form class="login" name="login" method="post" autocomplete="off">
      <textarea name="feed" rows="10" cols="30" maxlength="2000"></textarea>
      <br>
      <br>
      <input type ="submit" name="submit" value="submit">
    </form>
    </div>
  </body>
</html>
