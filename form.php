<?php include('core/init.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link href="css/formm.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
</head>

<body> 
     <div  id="input"> 
        <form action="reg.php" method="post"> 
           <div  class="cont">Name </div><input id="user"type="text" placeholder="first name" name="fname"  required="required"/><input id="user" type="text" placeholder="last name" name="lname" />
            <div  class="cont">email_id</div><input type="text" placeholder="@emample.com" name="email" required="required" />
            <div  class="cont">Father's Name</div><input type="text" name="F_name" required="required" />
            <div  class="cont">Mother's Name</div><input type="text" name="M_name" required="required" />
            <div  class="cont">Gender</div><select id="option" name="gender">
            <option value="male">male</option>
            <option value="female">female</option></select>
             <div  class="cont">Mobile</div><input type="text" name="mob" required="required" />
              <div  class="cont">Password</div><input type="password" name="pass" required="required" />
              <input id="ok" type="submit" value="done" />
               <input id="ok" type="reset" value="reset" />
        </form>
            
     </div>   
</body>
</html>
