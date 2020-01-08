
 <?php
 session_start();
 error_reporting(0);
 if(strlen($_SESSION['login'])==0)
   {
 header('location:http://localhost/Apartment_Management_System/');
 }

 include("includes/config.php");

 if(isset($_POST['submit'])){
 $firstname=$_POST['first'];
 $lastname=$_POST['last'];
 $email=$_POST['email'];
 $password=md5($_POST['password']);
 $contact=$_POST['phno'];
 $block=$_POST['block'];
 $flatno=$_POST['flat'];
 $status=1;
 $check = mysqli_query($con,"SELECT userEmail FROM user WHERE userEmail='$email'");
 $count=mysqli_num_rows($check);
 if($count==0)
   {
     require('../libphp-phpmailer/class.phpmailer.php');
     require('../libphp-phpmailer/class.smtp.php');
     $insuser=mysqli_query($con,"INSERT INTO user (firstName,lastname,userEmail,password,contactNo,block,flatNumber,status) VALUES ('$firstname','$lastname','$email','$password','$contact','$block','$flatno','$status')");

     $mail = new PHPMailer;
     $mail->setFrom('admin@example.com');
     $mail->addAddress($email);
     $mail->Subject = 'Message sent by PHPMailer';
     $mail->Body = "Your username is '".$email."' <br /> Your Password is '".$_POST['password']."'" ;
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
       echo !extension_loaded('openssl')?"Not Available":"Available";
       echo 'Email is not sent.';
       echo 'Email error: ' . $mail->ErrorInfo;
     } else {

       echo "<script> alert('User added Successfully');</script>";

     }

     exit();
 }

 else{
   echo "$count";
   header("location:http://localhost/Apartment_Management_System/admin/adduser.php?errormsg=1");
 }
 }
  ?>
  <?php
  session_start();
  if(strlen($_SESSION['login'])==0)
    {
  header('location:http://localhost/Apartment_Management_System/');
  }
   ?>
   <?php include "includes/adminnav.php" ?>
   <?php include "includes/sidebar2.php" ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Add User</title>
 <!--link rel="stylesheet" href ="mystyles.css"-->
 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
 </head>
 <style media="screen">
 body{
     background:url(../img/image2.jpg);
     background-size:cover;
   font-family:Arial;
   font-family: 'Poppins', sans-serif;
 }
 .bod{
   padding-left: 300px;
 }
 .wrap{
   max-width:350px;
   border-radius:20px;
     margin:auto;
     background:rgba(0,0,0,0.8);
     box-sizing:border-box;
     padding:40px;
     color:#fff;
     margin-top: 60px;
 }
 h2{
      text-align:center;
 }
 input[type=text],input[type=password],input[type=email],select{
         width:100%;
         box-sizing:border-box;
       padding:12px 5px;
       background:rgba(222,207,206,0.10);
       outline:none;
       border:none;
       text-align: center;
       border-bottom:1px  #fff;
       color:#fff;
       border-radius:15px;
       margin:5px;
        font-weight:bold;
 }

 option{
     background:rgba(222,207,206,0.10);
   color: black;
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
 a, a:active, a:focus ,select  {
    outline: none;
 }
 @media screen and (max-width:768px)
 {
   .bod{
     padding: 0;
   }
 }
 </style>
 <body>
<div class="bod">


 <div class ="wrap">
     <h2> Add User</h2>
     <br>
     <form class="login" name="login" method="post" autocomplete="off">
       <?php if(isset($_GET['errormsg'])==true){
 echo '<span style="color:red;text-align:center;"><b>User Already Exists</b></span>';
         }?>
         <input type ="text" name="first"  placeholder ="First Name"required>
         <input type ="text" name="last" placeholder ="Last Name">
         <input type ="email" name="email" placeholder ="Email"required>
         <input type ="text" name="password" placeholder ="Password"required>
         <input type ="text" name="phno" placeholder ="Contact No"required>
         <select  name="block" placeholder ="Block" required>
           <option value="">Choose Block</option>
           <option value="A">Block A</option>
           <option value="B">Block B</option>
           <option value="C">Block C</option>
           <option value="D">Block D</option>
         </select>
         <input type ="text" name="flat" placeholder ="Flat No"required>
         <input type ="submit" name="submit" value="ADD">
      </form>
 </div>
 </div>
 </body>
 </html>
