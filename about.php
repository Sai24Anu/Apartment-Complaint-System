<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">
    <title></title>
    <style media="screen">
    body{
      background-color: grey;
      margin: 0;

    }
      .container{
        padding-left: 500px;
        padding-top: 500px;
        color: white;
        width: 70%;
        font-size: 22px;
        padding-left: 30px;
        padding-top: 40px;
        display: flex;
      }
      .para{

  padding-top: 80px;
      }
      .img-wrap{
        padding-top: 100px;
        padding-left: 150px;
      }
      .img-wrap img{
        border-radius: 30px;

      }
      @media screen and (max-width:768px) {
        .container{
          display: block;
        }

        .img-wrap img{
          width: 200%;
          height:300%;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <br>
      <br>
      <br>
      <br>
      <div class="para">
        <p>Apartment management system is coming up with the concept to replace the paperwork and to maintain all the information digitally. The owners/tenants and technicians can be notified about complaints. This application will be used by apartment president and owners/tenants.</p>
        <br>
        <p>This website is used to manage all the maintenance issues in an appartment digitally. It keeps track of status of complaint, technicians, notice board, suggestions etc. There are four modules in this website namely Administrator, Technician, Owner/tenant, Notice board. Everyone can access the notice board and also provide suggestions.</p>
        <br>
        <p>We have automatic notification feature using which the technician can get notified about the problem as soon as the admin approves a complaint. Using this website we can minimize the human efforts and cost. It is very easy to use this website the user donot need any knowledge of latest technology to use it.</p>
            <br>
      </div>
      <div class="img-wrap">
        <img src="img/architecture-2607636_1920.jpg" alt="" height="75%" width="200%">

      </div>
    </div>

  </body>
    <?php include "footer.php"?>
</html>
