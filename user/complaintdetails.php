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
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style media="screen">
    body{
        background:url(../img/image2.jpg);
        background-size:cover;
      font-family:Arial;
      font-family: 'Poppins', sans-serif;
    }
      table{
        padding-left: 120px;
        padding-right: 20px;
        height: 600px;
        border: black solid 1px;
        border-color: black;
      }
.bod{

  padding-left: 350px;
  width: 100%;
}
@media screen and (max-width:768px){
  .bod{
    padding: 0;
  }
  table{
    width: 100%;
    height: 100%;
  }

}
    </style>

  </head>
  <body>

<div class="bod">
  <h1>Complaint Details</h1>

    <table cellpadding="" cellspacing="50" border="5" class="datatable-1 table-dark table-bordered 	 display" width="100%">

                    <tbody>
                      <?php
                      include("includes/config.php");
                      $id=$_GET['complainid'];
                      $ret=mysqli_query($con,"SELECT * FROM complaint WHERE complaintid='$id'");
                      $row = mysqli_fetch_array($ret);
                       ?>
                      <tr>
                        <td ><b>Complaint Number</b></td>
                        <?php
                        echo"<td >". $id."</td>"?>
                        <td><b>Complainant Name</b></td>
                        <td>
                          <?php
                            $uid=$row['Userid'];
                          $rat=mysqli_query($con,"SELECT * FROM user WHERE Userid='$uid'");
                          $rin = mysqli_fetch_array($rat);
                          $name=$rin['firstName'];
                          echo $name;
                           ?>
                        </td>

                      </tr >

    <tr>
      <td><b>Reg Date</b></td>
      <td> <?php  echo  $row['regDate'];?>
      </td>
                        <td><b>Complaint Type </b></td>
                        <td colspan="5"> <?php  echo  $row['ComplaintType'];?></td>

                        </tr>
    <tr>
                          <td ><b>Nature of Complaint</b></td>
                        <td colspan="5"><?php  echo  $row['noc'];?>  </td>

                      </tr>
    <tr>
                        <td><b>Complaint Details </b></td>

                        <td colspan="5"> <?php  echo  $row['noc'];?> </td>

                      </tr>



    <tr>
    <td><b>Technician alloted</b></td>

                  <td colspan="5"><?php
                  $tid=$row['Techid'];
                  $rt=mysqli_query($con,"SELECT * FROM technician WHERE Techid='$tid'");
                  $rn = mysqli_fetch_array($rt);
                  echo $rn['firstName'];
                  echo "<br/>";
                  echo "<br/>";
                  echo "Contact No : " ; echo "<a href='tel:".$rn['contactNo']."'   >".$rn['contactNo']."</a>";
                  echo "<br/>";
                  echo "<br/>";
                  echo "Email id: "; echo "<a href='mailto:".$rn['userEmail']."'>".$rn['userEmail']."</a>";
                   ?></td>

                      </tr>




    <tr>
    <td><b>Status</b></td>
    <td colspan="5"><?php   echo "<button type='button' class='btn btn-info'>".$row['status']."</button>"; ?></td>
    </tr>

                  </table>
</div>
  </body>
</html>
