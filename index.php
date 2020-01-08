<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Apartment_Management_System</title>
    <style media="screen">
      body{
        margin: auto;
        font-family: 'Poppins', sans-serif;
      }



  .typewriter {
    background-image: url("img/back.jpg");
    background-size:contain;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;;
    background-attachment: fixed;
    height: 600px;
    color: #923669;
    letter-spacing: 2px;
    font-family: Courier, monospace;
    }

    .typewriter-text {
        display: inline-block;
      	overflow: hidden;
      	letter-spacing: 2px;
     	animation: typing 5s steps(30, end), blink .5s step-end infinite;
        white-space: nowrap;
        font-size: 30px;
        font-weight: 700;
        box-sizing: border-box;
    }

    @keyframes typing {
        from {
            width: 0%
        }
        to {
            width: 100%
        }
    }

/*    @keyframes blink {
        from, to {
            border-color: transparent
        }
        50% {
            border-color: orange;
        }
    }
*/
    </style>
  </head>
  <body>
    <div class="typewriter">
    <div class="typewriter-text"><h1>Welcome to <br> AMS<br> Complaint<br>Management for<br>Maintainance</h1></div>
</div>


  <?php include 'footer.php';?>
  </body>
</html>
