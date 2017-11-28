<?php include('core/init.php');
if (isset($_GET['brandname']) === true) {
	$name = $_GET['brandname'];
	$query = mysql_query("SELECT * FROM `brand` WHERE `name` = '$name'");
	if ($result = mysql_fetch_array($query)) {
		
	} else {
		header('Location: index.php');
		exit();
	}
  }
else {
	header('Location: index.php');
	exit();
}
?>
<?php include('header.php'); ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link href="css/brand.css" type="text/css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>brand</title>
</head>

<body>
     
     <div class="brand_data">
		<div class="brandheader">         
         	
            <div class="logo_img">
               <img src="image/car brand/<?php echo $result['logo']; ?>" width="<?php echo $result['width']*2; ?>px" height="<?php echo $result['height']*2; ?>px"  />
         	</div>
         	
            <div class="logo_name">
              <?php echo $result['name']; ?>
         	</div>
            
		</div>
        
       
        <p> Car Models </p>
        <?php 
		  $name= $result['name'];
	      $query= mysql_query("SELECT * FROM `car` WHERE `brand_name` = '$name' ");
		  while($result1 = mysql_fetch_assoc($query)){
			  
	    ?>
       
        <div class="bran_car">
            <div class="car-pic"><img src="image/car/<?php echo $result1['brand_name'] ?>/<?php echo $result1['name'] ?>.jpg" height="125px" width="250px" />            </div>
            <div class="car-data"><a href="model.php?modelname=<?php echo $result1['name']; ?>">Model- <?php echo $result1['name'] ?> </a><br /> Price- 1000000</div>     
        </div> 
        <?php } ?>
         
      	</div>      
       
<?php include('footer.php'); ?>
