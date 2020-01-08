<?php
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

    $insreg=mysqli_query($con,"INSERT INTO Registrationlog (firstName,LastName,userEmail,password,contactNo,Block,flatno,status) VALUES ('$firstname','$lastname','$email','$password','$contact','$block','$flatno','$status')");

    echo "<script>alert('Your request is accepted.You will be notified when approved.'); window.location.href='http://localhost/Apartment_Management_System/'; </script>";
    exit();
}

else{
  echo "$count";
  header("location:http://localhost/Apartment_Management_System/user/userregistration.php?errormsg=1");

}
}
 ?>
<?php include '../navbar.php';?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
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
.wrap{
  max-width:350px;
  border-radius:20px;
    margin:auto;
    background:rgba(0,0,0,0.8);
    box-sizing:border-box;
    padding:40px;
    color:#fff;
    margin-top:100px;
}
h2{
     text-align:center;
}
select{
  width:100%;
  height: 50px;
  background:rgba(222,207,206,0.10);
  border-radius:15px;
  color: white;
  border:none;
font-size: 20px;
}
input[type=text],input[type=password],input[type=email]{
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
       font-size: 20px;
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
</style>
<body>

<div class ="wrap">
    <h2> Sign up Here</h2>
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
        <select  name="block" placeholder ="Block">
          <option>Choose Block</option>
          <option value="A">Block A</option>
          <option value="B">Block B</option>
          <option value="C">Block C</option>
          <option value="D">Block D</option>
        </select>
        <input type ="text" name="flat" placeholder ="Flat No"required>
        <input type ="submit" name="submit" value="submit">
     </form>
</div>
</body>
</html>
