<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
if(isset($_POST['submit']))
{
  include("includes/config.php");
  $msg=$_POST['chat'];
  $type='User';
  $id=$_SESSION['login'];
  $rat=mysqli_query($con,"SELECT * FROM user WHERE UserEmail='$id'");
  $rin = mysqli_fetch_array($rat);
  $name=$rin['firstName'];
  $uid=$rin['Userid'];
  $ins = "INSERT INTO noticeboard (msg,type,username,userid )
VALUES ('$msg', 'User','$name','$uid')";
if (mysqli_query($con, $ins)) {

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>

<?php include "includes/usernav.php" ?>
<?php include "includes/sidebar.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NoticeBoard</title>
    <style media="screen">
    body{
        background:url(../img/image2.jpg);
        background-size:cover;
      font-family:Arial;
      font-family: 'Poppins', sans-serif;
    }
    .bod{
      padding-left: 380px;

    }
    .bod textarea{
      background-color: #222;
      color: white;
      font-weight: bold;
      font-size: 18px;
    }
    .bod input[type=text]{
      background-color: #222;
      color: white;
      font-weight: bold;
      font-size: 18px;
      height: 5vh;
      width: 70%;
    }
    .bod input[type=submit]{
      width:10%;
      box-sizing: border-box;
  padding:10px 0;
 margin-top:30px;
 outline:none;
 border:none;
 background:#e67e22;
 border-radius:20px;
 font-size:20px;
 color:#fff;
 cursor: pointer;
    }
    </style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('#notice').scrollTop($('#notice')[0].scrollHeight);

});

</script>
  </head>
  <body>
    <div class="bod">


<textarea name="notice" id="notice" rows="20" cols="70" readonly>
<?php
  include("includes/config.php");
$check=mysqli_query($con,"SELECT * from noticeboard");
while($row=mysqli_fetch_array($check))
{
echo "[";
echo $row['type'];
echo "]";
echo " ";
echo " ";
if($row['username']!=""){
echo $row['username'] ;
echo $row['userid']."\t";
}
echo $row['regdate']."\t";
echo "\t";
echo $row['msg'];
echo "\n";
echo "\n";
}
 ?>
</textarea>
<br>
<br>
<form class="login" name="login" method="post" autocomplete="off">
  <input type="text" name="chat" placeholder="Add notice" required>
  <input type="submit" name="submit" value="Add">
</form>
</div>
  </body>
</html>
