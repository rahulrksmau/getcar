<?php include('core/init.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/carwall.css" rel="stylesheet" type="text/css" />
 <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
 <script type="text/javascript" >

 
 </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car-Wallpaper</title>
</head>

<body>
			<span><a href="index.php">getcar</a></span>
			<h3 id="wall">Car Wallpapers</h3>
			<?php  for( $num=1;$num<52;$num++){ ?>
              <a href="image/cars/<?php echo $num ?>.jpg" target="_blank"> <img class="photo" src="image/cars/<?php echo $num ?>.jpg" width="150px" height="140px"/></a>
   			<?php }?> 
   <div id="lightbox" > 
         
         <div class="image">
             <img id="image2"  src="" />
         </div>
                 <div class="lside">
         </div>
         
         <div class="rside">
         </div>
         
         <div class="close">
         X
         </div>
         
   </div>
   

</body>
</html>
