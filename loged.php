<?php include('core/init.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  <?php 
        $userr =$_POST['user_id'];
        $pass =$_POST['pass'];
  
        @mysql_connect("localhost","root",""); 
		@mysql_select_db("knit"); 
		
		
		$query= mysql_query("select count(`id`) from knit_project where email='$userr'and pass='$pass'");
		
		
		if(mysql_result($query, 0) == 1){
			$query= mysql_query("select `id` from knit_project where email='$userr' limit 1");
			$_SESSION['user_id'] = mysql_result($query, 0, 'id');
			header("Location: index.php");
		}

        else{?>
            <script>
			alert('invalid data');
			</script>
		<?php	}
  ?>
</head>

<body>
  
</body>
</html>