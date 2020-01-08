<?php
include("includes/config.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Action</title>

    <?php
    $id=$_GET['uid'];
      $ret=mysqli_query($con,"SELECT * FROM user WHERE Userid='$id'");
      $row=mysqli_fetch_array($ret);
     ?>
  </head>
  <body>
<h4>User Id : <?php echo $row['Userid']; ?></h4>
<br>
<h4>First Name : <?php echo $row['firstName']; ?></h4>
<br>
<h4>Last Name: <?php echo $row['lastname']; ?></h4>
<br>
<h4>Email : <?php echo $row['userEmail']; ?></h4>
<br>
<h4>contactNo : <?php echo $row['Userid']; ?></h4>
<br>
<h4>Block : <?php echo $row['block']; ?></h4>
<br>
<h4>Flat number : <?php echo $row['flatNumber']; ?></h4>

  </body>
</html>
