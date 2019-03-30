<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stock-Blood-List</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
  <style type="text/css">
    td{
      width: 200px;
      height: 40px;
    }
  </style>
</head>
<body>
<div div="full">
	<div id="inner_full"></div>
	<div id="header"><h2><a href="home.php" style="text-decoration: none;color: white">Blood Bank Management System</a></h2></div>
	<div id="body">
     <br>
     <?php
      // $un=$_SESSION['un'];
      // if (!$un) {
      // 	header("location:index.php");
      // }
     ?>
     <h1>Stock-Blood-List</h1><br>
    <center> <div id="form">
      
    <table>
      <tr>
        <td><center><b><font color="blue">Name</font></b></center></td>
        <td><center><b><font color="blue">Quantity</font></b></center></td>
       
      </tr>
      
      <tr>
        <td><center>O+</center></td>
        <td><center><?php 
            $q=$db->query("select * from donor_registration where bgroup='O+'");
            echo $row=$q->rowcount();
          ?></center></td>
        
      </tr>
        <tr>
        <td><center>AB+</center></td>
        <td><center><?php 
            $q=$db->query("select * from donor_registration where bgroup='AB+'");
            echo $row=$q->rowcount();
          ?></center></td>
        
      </tr>
        <tr>
        <td><center>AB-</center></td>
        <td><center><?php 
            $q=$db->query("select * from donor_registration where bgroup='AB-'");
            echo $row=$q->rowcount();
          ?></center></td>
        
      </tr>
        
      
    </table>
     </div></center>
     
    
	</div>
	<div id="footer"><h4 align="center">Copyright@2019myProjecthd</h4>
	<!-- <p align="center"><a href="index.php"><font color="white" ><?php $un=$_SESSION['un']; session_destroy();?>Logout</a></p> -->
</div>
</div>
</body>
</html>
