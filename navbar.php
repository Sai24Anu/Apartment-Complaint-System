<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!--link rel="stylesheet" href="css/nav.css"-->

    <style media="screen">
    *
    {

      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
    nav{
      display: flex;
      justify-content: space-around;
      align-items: center;
      min-height: 8vh;
      background-color: #222222;
      color: #FFFFFF;
      font-family: 'Poppins', sans-serif;
    }

    .logo{
      color: white;
      text-transform: uppercase;
      letter-spacing: 5px;
      font-size: 20px;
    }
    .logo a{
      color: white;
      text-decoration: none;
    }
    .nav-links{
        display: flex;
      justify-content: space-around;
      width: 60%;
    }
    .nav-links li{
      list-style: none;
    }
    .nav-links a{
      color: white;
      text-decoration: none;
      letter-spacing: 3px;
      font-weight: bold;
    }
    .burger{
      display: none;
      cursor: pointer;
    }
    .burger div{
      width: 28px;
      height: 3px;
      background-color: white;
      margin: 5px;
      transition: all 0.3s ease;
    }
    a:hover{
      color : #0099ff;
    }

    @media screen and (max-width:768px) {
      body{
        overflow-x: hidden;
      }
    .nav-links{
      position: absolute;
      right: 0px;
      height: 92vh;
      top: 8vh;
      background-color: #222222;
      display: flex;
      flex-direction: column;
      align-items: center;
      transform: translate(100%);
      transition : transform 0.25s ease-in;
    }
    .nav-links li{
      opacity: 1;
      width: 35%;
    }
    .burger{
      display: block;
    }
    .nav-active{
      transform: translateX(0%);

    }
    .toggle .line1{
      transform: rotate(-45deg) translate(-5px,6px);
    }
    .toggle .line2{
      opacity: 0;
    }
    .toggle .line3{
    transform :rotate(45deg) translate(-5px,-6px);
    }
    }

    </style>
  </head>
  <body>
    <nav>
      <div class="logo">
        <h4><a href="http://localhost/Apartment_Management_System/">Apartment Management System</a></h4>
      </div>
      <ul class="nav-links">
        <li>
          <a href="http://localhost/Apartment_Management_System/">Home</a>
        </li>
        <li>
          <a href="http://localhost/Apartment_Management_System/user/userlogin.php">User</a>
        </li>
        <li>
          <a href="http://localhost/Apartment_Management_System/user/userregistration.php">User Registration</a>
        </li>
        <li>
          <a href="http://localhost/Apartment_Management_System/technician/techlogin.php">Technician</a>
        </li>
        <li>
          <a href="http://localhost/Apartment_Management_System/admin/adminlogin.php">Admin</a>
        </li>
        <li>
          <a href="http://localhost/Apartment_Management_System/about.php">About</a>
        </li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
    <script type="text/javascript" >
    const navSlide=() =>{
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks= document.querySelectorAll('.nav-links li');
  burger.addEventListener('click',()=>{
      nav.classList.toggle('nav-active');
        burger.classList.toggle('toggle');
      });


}
navSlide();
    </script>
  </body>
</html>
