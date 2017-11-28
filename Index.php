<?php include('core/init.php'); ?>
<?php include('header.php'); ?>    

    <img src="image/ford-mustang-red-transparent-background-car.png" alt="getcar.com" width="150px" height="140px" class="logo"  />
      
          <div><p>getcars</p></div>
    </header>

    <section class="sec">
           <h1>Cars Update</h1>
    </section>
    
    <aside class="data">
		<?php
        	$query = mysql_query("SELECT * FROM `brand`");
			while($result = mysql_fetch_assoc($query)) {
		?>
        	<div class="box">
            	<div class="brandlogo">
                	<a href="brand.php?brandname=<?php echo $result['name']; ?>"><img src="image/car brand/<?php echo $result['logo']; ?>" alt="<?php echo                         $result['name']; ?>" width="<?php echo $result['width']; ?>px" height="<?php echo $result['height']; ?>px"/></a>
                </div>
            	<a href="brand.php?brandname=<?php echo $result['name']; ?>"><p class="brandname"><?php echo $result['name']; ?> motors</p></a>
                <ul>
                  <li>Review:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['review']; ?>/5</li>
                </ul>
             </div>
        <?php } ?>
     
    </aside>
<?php include('footer.php'); ?>     
   
