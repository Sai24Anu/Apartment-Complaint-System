<?php
session_start();

include("includes/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM admin WHERE userEmail='".  $_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['username'];
$_SESSION['type']='admin';
$_SESSION['id']=mysqli_query($con,"SELECT Adminid FROM admin WHERE userEmail='".$_POST['username']."' ");
$status=1;
header("location:http://localhost/Apartment_Management_System/admin/dashboard.php");
exit();
}
else {
$_SESSION['login']=$_POST['username'];
$status=0;
$errormsg="Invalid username or password";
header("location:http://localhost/Apartment_Management_System/admin/adminlogin.php?errormsg=1");
}
}
 ?>
<?php include '../navbar.php';?>
<html>
    <head>
	 <title> Admin login </title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="Dashboard">
   <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	 <!--link rel="stylesheet" type="text/css" href="../css/adminlogin.css"-->
   <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

   <style media="screen">
   body{
    margin: 0 auto;
    background: url("../img/backgroundphoto.jpg");
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
   .loginbox
   {
     attachment:fixed;
    width: 370px;
    height: 450px;
    text-align: center;
    margin: 0 auto;
    background-color: rgba(127, 140, 141,0.9) ;
    margin-top: 160px;
    border-style: solid;
    border-radius: 20px;

   }

   .loginbox img{
     overflow: auto;
        border-radius:100px;
        width: 140px;
        height: 140px;
        margin-top: -60px;
        margin-bottom: 5px;
   }
   a{
    text-decoration: none;
    color: white;
   }

   h1{

   font-size: 22px;
   }


   input{
       margin-top: 30px;
       height:45px;
       width: 300px;
       border-radius: 25px;
       text-align: center;
       font-weight: bold;
       font-size: 18px;
       background-color:
       }

   .loginbox input[type="submit"]
   {
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    font-size: 18px;
    border-radius: 15px;
   }

   .loginbox input[type="submit"]:hover
   {
    background: #fb1111;
    font-size: 19px;
    cursor: pointer;

   }

   .forget
   {
     display: inline;
     padding-right: 10px;
   }
   .registerbox
   {

   width: 320px;
   height: 420px;
   background: #89a3b2;
   color: #fff;
   top: 50%;
   left: 40%;
   position: absolute;
   transform: translate(-50%, -50%);
   box-sizing: border-box;
   padding: 70px 30px;

   }

   .forget :hover{
     color: #ffb62e;
   }

   .registerbox input[type="submit"]
   {
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    font-size: 18px;
    border-radius: 15px;
   }

   .registerbox input[type="submit"]:hover
   {
    background: #fb1111;
    font-size: 19px;

   }

   </style>
     </head>
     <body>
       <div class="loginbox">
    <img src="../img/loginavatar2.png" class="avatar">
    <h1> <center>Admin</center> </h1><br>
     <form class="login" name="login" method="post" autocomplete="off">
      <?php if(isset($_GET['errormsg'])==true){
echo '<span style="color:red;text-align:center;"><b>INVALID Username or PASSWORD</b></span>';
//echo "<b color="red">INVALID Username or PASSWORD<b>";
        }?>
    <div class="input">
    <input type="email" placeholder="Enter Email  " name="username" >
    </div>
    <div class="input">
    <input type="password" placeholder="Enter Password" name="password" >
    </div>
    <input type="submit" name="submit" value="Login">
    <br>
    <br>
    <div class="forget">
    <a href="http://localhost/Apartment_Management_System/admin/forgetpassword0.php"><center>Forgot Password?<center></a>
    </div>
    </form>

  </div>

     </body>
</html>
