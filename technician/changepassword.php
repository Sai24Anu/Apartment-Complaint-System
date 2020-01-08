<?php
session_start();

include("includes/config.php");
if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['opwd']);
 $useremail=$_SESSION['login'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT password FROM technician where password='$oldpass' && userEmail='$useremail'");
$num=mysqli_fetch_array($sql);

if($num>0)
{
 $con=mysqli_query($con,"update technician set password='$newpassword' where userEmail='$useremail'");
$errormsg ="Password Changed Successfully !!";
echo "<script>alert('Password Changed Successfully !!'); </script>";

}
else
{
  $errormsg="Old Password not match !!";
  echo "<script>alert('Old Password not match !!');</script>";
}
}
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
?>
<?php include "includes/technav.php" ?>
<?php include "includes/sidebar.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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

    a, a:active, a:focus {
       outline: none;
    }
    .fom
    {
     width: 370px;
     height: 450px;
     text-align: center;
     margin: 0 auto;
     background-color: rgba(0,0,0,0.8) ;
     margin-top: 130px;
     border-style: solid;
     border-radius: 20px;

    }


    a{
     text-decoration: none;
     color: white;
    }

    h1{

    font-size: 22px;
    }


  /*  input{
        margin-top: 30px;
        height:45px;
        width: 300px;
        border-radius: 25px;
        text-align: center;
        font-weight: bold;
        font-size: 18px;
        background-color:
        } */
.fom input{
  margin-top: 100px;
    height: 45px;
  width:300px;
  box-sizing:border-box;
padding:12px 5px;
background:rgba(222,207,206,0.10);
outline:none;
border:none;
text-align: center;
border-bottom:1px  #fff;
color:#fff;
border-radius:15px;
margin:20px;
 font-weight:bold;
}
    .fom input[type="submit"]
    {
     border: none;
     outline: none;
     height: 40px;
     background: #163366;
     font-size: 16px;
     border-radius: 15px;
    }







    @media screen and (max-width:768px)
    {
      .bod{
        padding: 0;
      }
    }
    </style>
    <script type="text/javascript">
    function valid()
    {
    if(document.chngpwd.opwd.value=="")
    {
    alert("Old Password Filed is Empty !!");
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

    </head>
    <body>
<div class="bod">

<form name="chngpwd" action="" method="post" onSubmit="return valid();">
<div class="fom">
  <h1 style="color:white; padding-top:15px;">Change Password</h1>
  <div class="old">
<input type="password" name="opwd" id="opwd" placeholder="Old Password">
</div>
<div class="new">
<input type="password" name="npwd" id="npwd" placeholder="New Password">
</div>
<div class="con">
<input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password">
</div>
<div class="sub">
<input type="submit" name="Submit" value="Change Password" />
</div>
</div>
</form>
</div>

</body>
</html>
