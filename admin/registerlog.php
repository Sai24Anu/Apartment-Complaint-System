<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
 ?>
<?php include "includes/adminnav.php" ?>
<?php include "includes/sidebar2.php" ?>
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
 margin: 0 auto;
 background: url("../img/image2.jpg");
  height: 100%;
  background-size:contain;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;;
  background-attachment: fixed;
  font-family: 'Poppins', sans-serif;
}
a{
  text-decoration: none;
  color: white;
}
.container{
  padding-left: 100px;
}
h1{

font-size: 22px;
}
h2{
     text-align:center;
}
@media screen and (max-width:768px){
  .container{
    padding: 0;
  }
  table{
    width: auto;
    height: auto;
  }

}
</style>
  </head>

  <body>
    <div class="container">
      <div class="jumbbotron">

    <table class="table table-dark table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">UserId</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">contactNo</th>
          <th scope="col">Block</th>
          <th scope="col">flatNumber</th>
          <th scope="col" width="20%">Action</th>
        </tr>
      </thead>
      <tbody>

          <?php
          include("includes/config.php");

          $ret=mysqli_query($con,"SELECT * FROM Registrationlog");
          while ($row = mysqli_fetch_array($ret)) {
            // code...
            echo "<tr>";
          echo "<th scope='row'>".$row['Regid']."</th>";
          echo "<td>".$row['firstName']."</td>";
          echo "<td>".$row['LastName']."</td>";
          echo "<td>".$row['userEmail']."</td>";
          echo "<td>".$row['contactNo']."</td>";
          echo "<td>".$row['Block']."</td>";
          echo "<td>".$row['flatno']."</td>";
          echo "<td>";
            echo "<button class='btn btn-success'><a href=http://localhost/Apartment_Management_System/admin/useraccept.php?regid=".$row['Regid'].">ACCEPT</a></button>      ";
            echo "<button class='btn btn-danger'><a href=http://localhost/Apartment_Management_System/admin/userdelete.php?regid=".$row['Regid'].">DELETE</a></button>";
          echo "</td>";
          echo "</tr>";

        }?>


      </tbody>
    </table>


      </div>
    </div>
  </body>
</html>
