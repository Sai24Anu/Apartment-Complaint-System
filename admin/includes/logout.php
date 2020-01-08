<?php
session_start();
error_reporting(0);
include("includes/config.php");
$_SESSION['login']=="";
session_unset();
?>
<script language="javascript">
document.location="http://localhost/Apartment_Management_System/admin/adminlogin.php";
</script>
