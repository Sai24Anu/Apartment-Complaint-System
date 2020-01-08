
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <style media="screen">

    *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    margin-left: 0;
    }
    #sidebar{
      position: fixed;
      width: 350px;
      height: 100%;
      z-index: 1;
      background: #222222;
      overflow-x: hidden;
    transition : transform 1s ease-in;
    }
    #sidebar .closebtn {
      cursor: pointer;
        position: absolute;
        top: 0;
        right: 25px;
        color: white;
        text-decoration: none;
        font-size: 48px;
        margin-left: 50px;
    	}
    #sidebar ul li{
      color: white;
      list-style: none;
      padding: 15px 10px;
      border-bottom: 1px solid rgba(100,100,100,0.3);

    }
    #sidebar .toggle-btn{
      position: absolute;
      left: 230px;
      top: 20px;
    }
    #sidebar .toggle-btn span{
      display: block;
      width: 30px;
      height: 5px;

    }
 .toggle-btn{

      left: 380px;
      top: 200px;
    }
 .toggle-btn span{
        display: block;
        width: 30px;
        height: 5px;
        background: black;
        margin: 5px 0px;
    }
    @media screen and (max-width:768px){
      #sidebar{
        position: fixed;
        width: 350px;
        height: 100%;
        z-index: 1;
        background: #222222;
        overflow-x: hidden;
        visibility: hidden;
      transition : transform 1s ease-in;
      }
}
  </style>
  <script>
  function closeNav() {
      document.getElementById("sidebar").style.visibility="hidden";
      }

  function openNav() {
      document.getElementById("sidebar").style.visibility="visible";
      }
  </script>
</head>
<div id="sidebar" class="">
  <div class="closebtn" onclick="closeNav()">&times;</div>
  <h1 style="color:white;"><center>User</center></h1>

<ul>
  <li>Home</li>
  <li>Edit Profile</li>
  <li>Change Password</li>
  <li>Lodge Complaint</li>
  <li>Complaint history</li>
  <li>Logout</li>

</ul>
</div>

<div class="toggle-btn" onclick="openNav()"><a>
<span></span>
<span></span>
<span></span>
</a>
</div>
</nav>
