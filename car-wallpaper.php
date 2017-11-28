<?php include('core/init.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <link href="css/walpaper.css" type="text/css" rel="stylesheet" />
   <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
   <script type="text/javascript">
          $(document).ready(function(e) {
            $(".viewpoint").mouseenter(function(e) {
                $(this).children('a').children('img').animate({height:'440',left:'25px',top:'25px',width:'340'},100);
			    $(".dark-background").fadeIn(200);	
            }).mouseleave(function(e) {
                $(this).children('a').children('img').animate({
					height:'450',width:'350'},100);
			    $(".dark-background").fadeOut(200);
            });;
        });
   </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <div class="viewpoint">
      <a>
           <span >
              Road of Los Angles<em>by Rahul</em></span>    
           </span>
           <img src="image/croad.jpg" alt="road trip" />
           
      </a>
    </div>
    <div class="dark-background">
    </div>
</body>
</html>