
 <form method="POST" action="">
	  <input type="text" name="var">
	  <input type="submit" name="ok" value="Show Speed">


	  	  
	  <?php
		if (isset($_POST['ok']))
		{
			$v = $_POST['var'];
			$speed = exec("expect speed.sh $v | grep $v | awk ' FNR ==2 {print $6}'");
			$s = intval($speed/1024);
				
			if ($s == 0)
			{echo '<br> Line Down';}
			
			
		}	
		 
		
		
	  ?>

<img src="http://chart.apis.google.com/chart?cht=gom&chd=t:<?php echo $s; ?>&chs=250x150&chl=<?php echo $s; ?> Mbps" >
