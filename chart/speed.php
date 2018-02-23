
	  
  <form method="POST" action="">
	  <input type="text" name="var">
	  <input type="submit" name="ok" value="Show Speed">


 
	  	  
	  <?php
		if (isset($_POST['ok']))
		{
			$v = $_POST['var'];
			$speed = exec("expect speed.sh $v | grep $v | awk ' FNR ==2 {print $6}'");
			$s = intval($speed/1024);
			//~ echo $s;
			
			//~ $ftv = mysql_query('SELECT up FROM `slot_isam` WHERE ligne = "'.$v.'"');
			//~ $nbv=mysql_fetch_array($ftv);
			//~ $ftvd = $nbv[0];
			//~ $ftvd = mysql_result($ftv,0);
			
			//echo $ftvd;
			
			echo '<div id="chart_div" style="width: 30 0px; height: 120px;"></div>';
			
			
		}	
		
		
		
	  ?>
	  
	  
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["gauge"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
		var s = <?=$s ?>;
		//var s = 50;
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Speed', s]

        ]);

        var options = {
          width: 600, height: 150,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

      }
    </script>
  </form>
