<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome to getcars</title>
	<link href="css/main.css" type="text/css" rel="stylesheet" />
    <link href="css/loginn.css" type="text/css" rel="stylesheet" />
    <script src="js/jquery-1.11.0.min.js" type="text/javascript">
	</script>
    <script src="js/main.js"  type="text/javascript">
	</script>
</head>

<body>
    <div id="blackbox">
            </div>
            <div id="login">
                <form action="loged.php" method="post" onsubmit="return validate();" >
                             <div> Email id</div> <input type="email" name="user_id" id="user_email" placeholder="@example.com"  />
                             <div>Password</div><input type="password" name="pass" id="password"/>
                             <input style="background-color:#7979FF" type="submit" value="login " />
                </form> 
                    <h4><a href="form.php">Sign up </a></h4>
                    <h4><a href="">forget password</a></h4>
            </div> 
  <div class="container">
    <header >
       
        <nav> 
         	<?php
            
			?>
            <ul>
			<?php if (isset($_SESSION['user_id']) === true) {
				@mysql_connect("localhost","root",""); 
				@mysql_select_db("knit");
				$id = (int)$_SESSION['user_id'];
				$query= mysql_query("select `name` from knit_project where `id` = $id");
				$name = mysql_result($query, 0, 'name');
			?>
            	<li><a><?php echo $name; ?></a></li>
             <?php } else { ?>            
             	<li><a href="index.php">home</a></li>
             <?php } ?>
             
            
             <li><a href="wallpaper.php">car wallpapers</a></li>
              <li><a href="showroom.php">showrooms</a></li>
             <li><a href="about.php">about</a></li>
             <?php if (isset($_SESSION['user_id']) === true) { ?>
             	<li style="cursor:pointer"><a href="logout.php">log out</a></li>
             <?php } else { ?>
             	<li id="log" style="cursor:pointer"><a>log in</a></li>
             <?php } ?>
            </ul>
           
        </nav>
         