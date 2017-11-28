<?php include('core/init.php');
if (isset($_GET['modelname']) === true) {
	$name = $_GET['modelname'];
	$query = mysql_query("SELECT * FROM `car` WHERE `name` = '$name'");
	if ($result1 = mysql_fetch_array($query)) {
		
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
<link href="css/model.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Model</title>
</head>

<body>
   <div class="brand_data">
       <div class="car_pic">
			<img src="image/car/<?php echo $result1['brand_name'] ?>/<?php echo $result1['name'] ?>.jpg"  width="600px" height="400px" />
       </div>
      
      
       <div class="name">
       		<span id="car_name"><?php echo $result1['name'] ?> </span><br/>
            <span id="cost">Price : </span>&#8377;<?php echo $result1['price'] ?><br /> 
            <button class="button1">buy</button> <br />
            <button class="button1"> add to cart</button> 
       </div>
       
        
       
       <div class="spec" >
            <span>Specification </span>
			<div class="car_spec">Class </div><div class="spec_db"><?php echo $result1['class'] ?></div>
            <div class="car_spec">Body Style </div><div class="spec_db"><?php echo $result1['Body Style'] ?></div>
            <div class="car_spec">Layout </div><div class="spec_db"><?php echo $result1['Layout'] ?></div>
            <div class="car_spec">Engine </div><div class="spec_db"><?php echo $result1['Engine'] ?></div>
            <div class="car_spec">Transmission </div><div class="spec_db"><?php echo $result1['Transmission'] ?></div>
			<div class="car_spec">Wheelbase  </div><div class="spec_db"><?php echo $result1['Wheelbase'] ?></div>
            <div class="car_spec">Length </div><div class="spec_db"><?php echo $result1['Length'] ?></div>
            <div class="car_spec">Width </div><div class="spec_db"><?php echo $result1['Width'] ?></div>
            <div class="car_spec">Height </div><div class="spec_db"><?php echo $result1['Height'] ?></div>
            <div class="car_spec">Kerb Weight </div><div class="spec_db"><?php echo $result1['Kerb Weight'] ?></div>                   
       </div>
   
   </div>
</body>
</html>
<?php include('footer.php'); ?>
