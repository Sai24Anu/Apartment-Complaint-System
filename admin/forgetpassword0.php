<?php
session_start();
include("includes/config.php");
if(isset($_POST['submit']))
{
  $id= $_POST['username'];
  $ret=mysqli_query($con,"SELECT * FROM admin WHERE userEmail='$id'");
  $num=mysqli_fetch_array($ret);

if($num>0)
{
  $otp= mt_rand(100000, 999999);
  $_SESSION['msg']=$otp;
  require '../libphp-phpmailer/class.phpmailer.php';
  require '../libphp-phpmailer/class.smtp.php';
  $mail = new PHPMailer;
  $mail->setFrom('admin@example.com');
  $mail->addAddress($id);
  $mail->Subject = 'Forget Password';
  $mail->Body = "Your OTP is '".$otp."'" ;
  $mail->IsSMTP();
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'ssl://smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Port = 465;

  //Set your existing gmail address as user name
  $mail->Username = 'ams605044@gmail.com';

  //Set the password of your gmail address here
  $mail->Password = 'Admin11123';
  if(!$mail->send()) {
    echo 'Email is not sent.';
    echo 'Email error: ' . $mail->ErrorInfo;
  } else {
    header("location:http://localhost/Apartment_Management_System/admin/setpassword.php?userid=$id");
  }
}
else{
  echo "<script>alert('No such User Found!!');</script>";
}
}
 ?>
<?php include '../navbar.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forget Password</title>
  </head>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <style media="screen">
  body{
  background:url(../img/image2.jpg);
  background-size:cover;
font-family: 'Poppins', sans-serif;
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
input[type=email],input[type=password]{
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
cursor: pointer;
}
a, a:active, a:focus {
   outline: none;
}

  </style>
  <body>
    <div class ="wrap">
    <h2> Enter Registered Email</h2>
    <br>
    <form class="login" name="login" method="post" autocomplete="off">

        <input type ="email" name="username" placeholder ="Email"required>
        <input type ="submit" name="submit" value="submit">
     </form>
</div>
  </body>
</html>
