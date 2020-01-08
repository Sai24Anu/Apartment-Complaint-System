<?php
session_start();

include("includes/config.php");
if(strlen($_SESSION['msg'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}

if(isset($_POST['submit'])){
  $id=$_POST['otp'];
  $useremail=$_GET['userid'];
  if($id==$_SESSION['msg']){
    $newpassword=md5($_POST['npwd']);
    $con=mysqli_query($con,"update user set password='$newpassword' where userEmail='$useremail'");
    echo "<script> alert('Password Changed Successfully !!'); </script>";
   header('location:http://localhost/Apartment_Management_System/user/userlogin.php?no=1');
  }
  else {
      echo "<script>alert('Invalid!!'); </script>";
  }
}
?>
<?php include '../navbar.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forget Password</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
  body{
  background:url(../img/image2.jpg);
  background-size:cover;
font-family: 'Poppins', sans-serif;
}
a, a:active, a:focus {
   outline: none;
}
a{
 text-decoration: none;
 color: white;
}
.wrap{
max-width:350px;
border-radius:20px;
  margin:auto;
  background:rgba(0,0,0,0.8);
  box-sizing:border-box;
  padding:40px;
  align-items: center;
  color:#fff;
  margin-top:100px;
}
h2{
   text-align:center;
}
input[type=number],input[type=password]{
  text-align: center;
      width:100%;
      box-sizing:border-box;
    padding:12px 5px;
    background:rgba(222,207,206,0.10);
    outline:none;
    border:none;
    border-bottom:1px  #fff;
    color:#fff;
    border-radius:5px;
    margin:5px;
     font-weight:bold;
}
input[type=submit]{
   width:100%;
   box-sizing: border-box;
padding:10px 0;
margin-top:30px;
outline:none;
border:none;
background:#003366;

border-radius:20px;
font-size:20px;
color:#fff;
}

  </style>
  <script type="text/javascript">
  function valid()
  {
  if(document.chngpwd.otp.value=="")
  {
  alert("OTP Filed is Empty !!");
  document.chngpwd.opwd.focus();
  return false;
  }
  else if(document.chngpwd.npwd.value=="")
  {
  alert("New Password Filed is Empty !!");
  document.chngpwd.npwd.focus();
  return false;
  }
  else if(document.chngpwd.cpwd.value=="")
  {
  alert("Confirm Password Filed is Empty !!");
  document.chngpwd.cpwd.focus();
  return false;
  }
  else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
  {
  alert("Password and Confirm Password Field do not match  !!");
  document.chngpwd.cpwd.focus();
  return false;
  }
  return true;
  }
  </script>

  <body>
    <center>Check your mail for OTP </center>
    <div class ="wrap">
    <h2> Enter Registered Email</h2>
    <br>
    <form name="chngpwd" action="" method="post" onSubmit="return valid();">

        <input type ="number" name="otp"  id="otp" placeholder ="OTP"required>
        <input type="password" name="npwd" id="npw" placeholder="New password">
        <input type="password" name="cpwd" id="cpwd" placeholder="Confirm password">
        <input type ="submit" name="submit" value="submit">
     </form>
</div>
  </body>
</html>
