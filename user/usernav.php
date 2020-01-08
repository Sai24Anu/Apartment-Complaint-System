<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
}.nav-links{
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
a:hover{
  color : #0099ff;
}
.logo{
  left: 0;
}
.logout{

  font-size: 20px;
}
</style>
</head>
<nav>
  <ul  class="nav-links">
  <li>
<div class="logo">
      <h4><a href="http://localhost/Apartment_Management_System/user/dashboard.php">AMS | User </a></h4>
</div>
</li>
<li>
<div class="logout">
  <a href="includes/logout.php">logout</a>
</li>
</ul>
</div>
</nav>
