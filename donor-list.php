<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
     <h1>Donor Registration</h1><br>
    <center> <div id="form">
      
    <table>
      <tr>
        <td><center><b><font color="blue">Name</font></b></center></td>
        <td><center><b><font color="blue">Father's Name</font></b></center></td>
        <td><center><b><font color="blue">Address</font></b></center></td>
        <td><center><b><font color="blue">City</font></b></center></td>
        <td><center><b><font color="blue">Age</font></b></center></td>
        <td><center><b><font color="blue">Blood Group</font></b></center></td>
        <td><center><b><font color="blue">E-Mail</font></b></center></td>
        <td><center><b><font color="blue">Mobile</font></b></center></td>
      </tr>
      <?php
       $q=$db->query("select * from donor_registration");
        while($r1=$q->fetch(PDO::FETCH_OBJ))
        {
          ?>
          <tr>
        <td><center><?= $r1->name;?></center></td>
        <td><center><?= $r1->fname;?></center></td>
        <td><center><?= $r1->address;?></center></td>
        <td><center><?= $r1->city;?></center></td>
        <td><center><?= $r1->age;?></center></td>
        <td><center><?= $r1->bgroup;?></center></td>
        <td><center><?= $r1->email;?></center></td>
        <td><center><?= $r1->mno;?></center></td>
      </tr>
          <?php
        }
      ?>
      
    </table>
     </div></center>
     
    
	</div>
	<div id="footer"><h4 align="center">Copyright@2019myProjecthd</h4>
	<!-- <p align="center"><a href="index.php"><font color="white" ><?php $un=$_SESSION['un']; session_destroy();?>Logout</a></p> -->
</div>
</div>
</body>
</html>
