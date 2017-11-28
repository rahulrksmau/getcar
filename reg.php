<?php include('core/init.php'); ?>
 <?php
    $name1=$_POST['fname'].$_POST['lname'];
	
    
//   echo $name;
   $Fname=$_POST['F_name'];
//   echo $Fname;
   $Mname=$_POST['M_name'];
//   echo $Mname;
    $gender=$_POST['gender'];
//    echo $gender;
  
   $email=$_POST['email'];
//   echo $email;
   $mob=$_POST['mob'];
//   echo $mob;
   $pass=$_POST['pass'];
//   echo $pass;
   @mysql_connect('localhost','root','');
   
   @mysql_select_db("knit");
   $query="insert into knit_project(name,Fname,Mname,gender,email,mobile,pass) values('$name1','$Fname','$Mname','$gender','$email','$mob','$pass')";     //unordered 
 
   mysql_query($query); 
   
   
 ?>
 <html>
   <body>
         <div><h1 style="color:#FF0000"><?php echo $_POST['fname']; ?></h1></div>
         <H1>YOU have successfully registered</H1>
         <h1><a href="welcome.php" >log in</h1>
         
   </body>
   
 </html>
 
 
 