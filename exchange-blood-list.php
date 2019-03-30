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
<body>
<div div="full">
  <div id="inner_full"></div>
  <div id="header"><h2><a href="home.php" style="text-decoration: none;color: white">Blood Bank Management System</a></h2></div>
  <div id="body">
     <br>
     <?php
      // $un=$_SESSION['un'];
      // if (!$un) {
      //  header("location:index.php");
      // }
     ?>
     <h1>Exchange Blood List</h1><br>
    <center> <div id="form">
      <form action="" method="post">
       <table>
         <tr>
           <td width="200px" height="50px">Enter Name</td>
           <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
           <td width="200px" height="50px">Enter Father's Name</td>
           <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
         </tr>
         <tr>
           <td width="200px" height="50px">Enter Address</td>
           <td width="200px" height="50px"><textarea name="address"></textarea></td>
           <td width="200px" height="50px">Enter City</td>
           <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
         </tr>
          <tr>
           <td width="200px" height="50px">Enter Age</td>
           <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
           <td width="200px" height="50px">Select Blood Group</td>
           <!-- <td width="200px" height="50px"><input type="text" name="city" placeholder="Select Blood Group"></td> -->
           <td width="200px" height="50px">
             <select name="bgroup">
               <option>O+</option>
               <option>AB+</option>
               <option>AB-</option>
             </select>
           </td>
         </tr>
          <tr>
           <td width="200px" height="50px">Enter E-Mail</td>
           <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
           <td width="200px" height="50px">Enter Mobile No</td>
           <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
            <td width="200px" height="50px">Exchange Blood Group</td>
           <!-- <td width="200px" height="50px"><input type="text" name="city" placeholder="Select Blood Group"></td> -->
           <td width="200px" height="50px">
             <select name="ebgroup">
               <option>O+</option>
               <option>AB+</option>
               <option>AB-</option>
             </select>
           </td>
         </tr>
         <tr>
           <td><input type="submit" name="sub" value="Save"></td>
         </tr>
       </table>
     </form>
     <?php 
      if(isset($_POST['sub']))
      {   // front end data input
        $name=$_POST['name'];
        $fname=$_POST['fname'];
        echo $address=$_POST['address'];
        $city=$_POST['city'];
        $age=$_POST['age'];
        echo $bgroup=$_POST['bgroup'];
        $email=$_POST['email'];
        $mno=$_POST['mno'];
        $ebgroup=$_POST['ebgroup'];
        // front end data input//
        //select and insert
        $q="select * from donor_registration where bgroup='$bgroup'";
        $st=$db->query($q);
        $num_row=$st->fetch();
        $id=$num_row['id'];
        $name=$num_row['name'];
        $b1=$num_row['bgroup'];
        $mno=$num_row['mno'];
        $q1="insert into out_stock_b(bname,name,mno) values(?,?,?)";
        $st1=$db->prepare($q1);
        $st1->execute([$b1,$name,$mno]);
        //delete code
         $q2="delete from donor_registration where id='$id' ";
         $st1=$db->prepare($q2);
         $st1->execute();
         //delete
         // exchange info insert
        $q=$db->prepare("insert into donor_registration (name,fname,address,city,age,email,mno,bgroup)values(:name,:fname,:address,:city,:age,:bgroup,:email,:mno)");
          $q->bindValue('name',$name);
          $q->bindValue('fname',$fname);
          $q->bindValue('address',$address);
          $q->bindValue('city',$city);
          $q->bindValue('age',$age);
          $q->bindValue('bgroup',$bgroup);
          $q->bindValue('email',$email);
          $q->bindValue('mno',$mno);
           // $q->bindValue('ebgroup',$ebgroup);
          if($q->execute())
          {
            echo "<script>alert('Donor Registration Successfull')</script>";
          }else{
             echo "<script>alert('Donor Registration Unsuccessfull')</script>";
          }
                  //exchange info front end
       }
     ?>
     </div></center>
     
    
  </div>
  <div id="footer"><h4 align="center">Copyright@2019myProjecthd</h4>
  <!-- <p align="center"><a href="index.php"><font color="white" ><?php $un=$_SESSION['un']; session_destroy();?>Logout</a></p> -->
</div>
</div>
</body>
</html>
