<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body bgcolor="green">
<div div="full">
	<div id="inner_full"></div>
	<div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: white">Blood Bank Management System</a></h2></div>
	<div id="body">
     <br>
     <?php
      $un=$_SESSION['un'];
      if (!$un) {
      	header("location:index.php");
      }
     ?>
     <h1>Welcome Admin</h1><br>
      
     <ul>
     	<li><a href="donor-reg.php">Donor Registration</a></li>
     	<li><a href="donor-list.php">Donor List</a></li>
     	<li><a href="stock-blood-list.php">Stock Blood List</a></li>
     </ul>
     <br><br><br><br><br>

     <ul>
     	<li><a href="out-stock-blood-list.php">Out Stock Blood List</a></li>
     	<li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
     	<li><a href="ngo-list.php">Exchange Blood List</a></li>
     </ul>
    
	</div>
	<div id="footer"><h4 align="center">Copyright@2019myProjecthd</h4>
	<p align="center"><a href="index.php"><font color="white" ><?php $un=$_SESSION['un']; session_destroy();?>Logout</a></p>
</div>
</div>
</body>
</html>
