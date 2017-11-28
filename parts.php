<?php include('core/init.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style>
    #login{
		
	    width:330px;
	    height:280px;
	    border:3px solid #000042;
		}
	#login input{
		float:left;
		width:300px;
		height:30px;
		margin:10px;
		font-weight:600;
		border-color:#5959FF;
		border-radius:8px;
		}
	#login div{
		margin:10px;
		margin-bottom:0px;
		font-family:"Courier New", Courier, monospace;
		font-size:20px;
		font-weight:600;
		color:#000042;}
	#login h4{
		float:left;
		margin:0px 10px 0px 50px;}
  </style>
   <script type="text/javascript">
     
      function validate(){
		      var user = document.getElementById('user_email').value;
			  var pass = document.getElementById('password').value;
			     if(user =="" || pass==''){
				     alert('invalid input data');
				     return false;
				        }
			     else{
				   return true;
				       }	  
		  }
  </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
   <div id="login">
       <form action="form.php" method="post" onsubmit="return validate();" >
            <div> Email id</div> <input type="email" name="user_id" id="user_email" placeholder="@example.com"  />
            <div>Password</div><input type="password" name="pass" id="password"/>
            <input style="background-color:#7979FF" type="submit" value="login " />
       </form> 
           <h4><a href="">Sign up </a></h4>
           <h4><a href="">forget password</a></h4>
   </div>
</body>
</html>