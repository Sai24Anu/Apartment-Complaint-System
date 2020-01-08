<?php
session_start();
include("includes/config.php");

if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}


$id=$_SESSION['login'];

  $ret=mysqli_query($con,"SELECT * FROM technician where userEmail='$id'");
  $row = mysqli_fetch_array($ret);
  if(isset($_POST['submit']))
  {
    $first=$_POST['firstname'];
    $last=$_POST['lastname'];
    $contact=$_POST['contact'];
    $upt=mysqli_query($con,"update technician set firstName='$first',	lastname='$last',contactNo='$contact' where userEmail='$id'");
    echo "<script>alert('values updated sucessfully');</script>";
    header('location:http://localhost/Apartment_Management_System/technician/editprofile.php');
  }
 ?>
<?php include "includes/technav.php" ?>
<?php include "includes/sidebar.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register log</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style media="screen">
  body{
    background:url(../img/art-background-close-up-1939485.jpg);
    margin: 0;
    padding: 0;
  }
  .container{
    padding-left: 150px;
  }
.container  input{
    border: 1px solid black;
    color: black;
  }
.container input:read-only {
  cursor:not-allowed;
}
input[type=submit]
{
  width: 100px;
  box-sizing: border-box;
padding:10px 0;
margin-top:30px;
outline:none;
border:none;
background:#003366;
border-radius:20px;
font-size:20px;
color:#fff;
cursor: pointer;
}
  @media screen and (max-width:768px)
  {
    .container{
      padding: 0;
    }
  }
</style>
    </head>
  <body>
    <div class="container">
        <h1>Edit Profile</h1>
      	<hr>
    	<div class="row">

          <!-- edit form column -->
          <div class="col-md-9 personal-info">

            <h3>Personal info</h3>

            <form class="form-horizontal" role="form"  method="post" autocomplete="off">
              <div class="form-group">
                <label class="col-lg-3 control-label">Tech ID:</label>
                <div class="col-lg-8">
              <?php  echo "<input class='form-control' type='number' value= '".$row['Techid']."' readonly>"
                ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">First name:</label>
                <div class="col-lg-8">
                  <?php
                  echo "<input class='form-control' type='text' name='firstname' value= '".$row['firstName']."'>";
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Last name:</label>
                <div class="col-lg-8">
                  <?php
                    echo "<input class='form-control' type='text' name='lastname' value='".$row['lastname']."'>";
                    ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <?php
                    echo "<input class='form-control' type='text' value='".$row['userEmail']."'readonly>";
                    ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Contact No</label>
                <div class="col-lg-8">
                  <?php  echo "<input class='form-control' type='number' name='contact' value= '".$row['contactNo']."' >"
                    ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Feild:</label>
                <div class="col-md-8">
                  <?php  echo "<input class='form-control' type='text' value= '".$row['feild']."' readonly  >"
                    ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">

                  <span></span>

                </div>
              </div>
              <input type ="submit" name="submit" value="submit">
            </form>
          </div>
      </div>
    </div>
    <hr>
  </body>
</html>
