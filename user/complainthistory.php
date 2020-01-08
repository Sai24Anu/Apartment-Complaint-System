<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
 ?>
<?php include "includes/usernav.php" ?>
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
          <th scope="col">ComplaintId</th>
          <th scope="col">Complaint</th>
          <th scope="col">Regitered Date</th>
          <th scope="col">last Updated Date</th>
          <th scope="col">Status</th>
          <th scope="col" width="20%">Action</th>
          <th scope="col" width="20%">Feedback</th>
        </tr>
      </thead>
      <tbody>

          <?php
          include("includes/config.php");
          $id=$_SESSION['login'];
        $rat= mysqli_query($con,"SELECT * FROM user WHERE userEmail='$id'");
        $rew = mysqli_fetch_array($rat);
        $uid=$rew['Userid'];

          $ret=mysqli_query($con,"SELECT * FROM complaint WHERE Userid='$uid' ORDER BY complaintid DESC");
          while ($row = mysqli_fetch_array($ret)) {
            // code...
            echo "<tr>";
          echo "<th scope='row'>".$row['complaintid']."</th>";
          echo "<th scope='row'>".$row['noc']."</th>";
          echo "<td>".$row['regDate']."</td>";
          echo "<td>".$row['lastUpdationDate']."</td>";
          echo "<td>";
          if($row['status']=="Not Processed")
          {
          echo "<button class='btn btn-danger'>".$row['status']."</button>";
          }
          if($row['status']=="Pending")
          {
              echo "<button class='btn btn-warning'>".$row['status']."</button>";
          }
            if($row['status']=="Closed")
            {
              echo "<button class='btn btn-success'>".$row['status']."</button>";
            }
          echo "</td>";
          echo "<td>";
          echo "<button class='btn btn-primary'><a href=http://localhost/Apartment_Management_System/user/complaintdetails.php?complainid=".$row['complaintid'].">View Details</a></button>";
          echo "</td>";
          if($row['status']=='Closed'){
          echo "<td>";
          if($row['fedstat']==0)
          {
          echo "<button class='btn btn-info'><a href=http://localhost/Apartment_Management_System/user/feedback.php?complainid=".$row['complaintid'].">Give Feedback</a></button>";
          }
          else{
            echo "<button class='btn btn-success'>Feedback Complete</button>";
          }

          echo "</td>";
        }
          echo "</tr>";

        }?>


      </tbody>
    </table>


      </div>
    </div>
  </body>
</html>
