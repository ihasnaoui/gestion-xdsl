<?php include_once("../connect.php");?>

<?php

	$req = 'SELECT count(*) AS cpt, projet FROMP InventaireADSL WHERE projet !=  "" GROUP by projet';
				mysql_query($req);
				
?>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
	    fta = <?=5; ?>;
        ftv = <?=25; ?>;
        var data = google.visualization.arrayToDataTable([
		
			 
			 
          ['Task', 'Hours per Day'],
		  for (i=0;i<3;i++)
		  {
		  	['ADSL',     fta],
		  }
         //['ADSL',     fta],
          //['VDSL',      ftv],
          ['FTTH',    10]
        ]);

        var options = {
          title: 'State',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

  
		
		
   			 <div id="piechart_3d" style="width: 600px; height: 400px;"></div>
</form>

