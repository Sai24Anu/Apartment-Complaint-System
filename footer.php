<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<style>
		  body {
	    margin: 0;
	    width: 100%;
	    height: 300px;
      outline: none;
      font-family: 'Poppins', sans-serif;
}
		.footer{

			  background-color: #222222;
			  width: auto;
			  text-align: left;
			  font-family: sans-serif;
			  font-weight: bold;
			  font-size: 16px;
        padding-top: 50px;
        padding-bottom: 10px;
			  padding-left: 50px;
		}
.footer .footer-left,
.footer .footer-center,
.footer .footer-right {
  display: inline-block;
  vertical-align: top;
}
.footer .footer-left {
  width: 33%;
  padding-right: 15px;
}
.footer .about {
  line-height: 20px;
  color: #FFFFFF;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}
.footer .about span {
  display: block;
  color: #FFFFFF;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
  margin-top: 20px;
}
.footer .icons {
  margin-top: 25px;
}

.footer .icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  font-size: 25px;
  text-align: center;
  color: #FFFFFF;
  margin-right: 6px;
  margin-bottom: 5px;
}
.footer .icons a:hover{
  color: #0099ff;
  -webkit-transition:all ease 0.5s;
}
		.footer .footer-center {
  width: 30%;
}
a, a:active, a:focus {
   outline: none;
}
.footer .footer-center i {
  color: #0099ff;
	padding-top: 10px;
  font-size: 25px;
  width: 38px;
  height: 38px;
  text-align: center;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer .footer-center p {
  display: inline-block;
  color: #FFFFFF;
  vertical-align: middle;
  margin: 0;
}

.footer .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer .footer-center p a {
  color: #0099ff;
  text-decoration: none;
}
.footer .footer-center p a:hover {
  color: rgba(155, 18, 215,0.5);
  -webkit-transition:all ease 0.5s;
}
		.footer .footer-right {
  width: 35%;
  margin-left: 2px;
}
.footer .footer-right b{
  color: #0099ff;
  margin-left: -12px;
  font-size: 20px;
  letter-spacing: 2px;
}
 h2 {
  color: #ffffff;
  font-size: 36px;
  font-weight: normal;
  margin: 0;
  letter-spacing: 2px;
  color: #0099ff;
}

.footer .menu {
  color: #FFFFFF;
  margin: 20px 0 12px;
  padding: 0;
}

.footer .menu a {
  display: block;
  line-height: 1.8em;
  text-decoration: none;
  color: inherit;
}


.footer .menu a:hover {
  color: #0099ff;
  -webkit-transition:all ease 0.5s;
}

.footer .name {
  color: #0099ff;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

@media (max-width: 767px) {
  .footer {
    font-size: 14px;
  }
  .footer .footer-left,
  .footer .footer-center,
  .footer .footer-right {
    display: block;
    width: auto;
    margin-bottom: 40px;
    text-align: center;
  }
  .footer .footer-center i {
    margin-left: 0;
  }
}
	</style>
</head>
<body>


<div class="footer">
  <div class="footer-left col-md-4 col-sm-6">
      <h2> About the website</h2> <p class="about"><span>Apartment management system is coming up with the concept to replace the paperwork and to maintain all the information digitally. The owners/tenants and technicians can be notified about complaints. This application will be used by apartment president and owners/tenants.</span>
    </p>
    <div class="icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Adress and Pincode</span> India, Hyderabad</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p> (+00) 12345 678 90</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#"> ams605044@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <b>A M S</b>
    <p class="menu">
      <a href="http://localhost/Apartment_Management_System/"> Home</a>
      <a href="http://localhost/Apartment_Management_System/about.php"> About</a>
      <a href="http://localhost/Apartment_Management_System/user/userlogin.php"> User</a>
      <a href="http://localhost/Apartment_Management_System/technician/techlogin.php"> Technician</a>
      <a href="http://localhost/Apartment_Management_System/admin/adminlogin.php"> Admin</a>

    </p>
    <p class="name"> AMS &copy Copyrigt: 2019</p>
  </div>
</div>
</body>
  </html>
