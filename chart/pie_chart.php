<?php include_once("../connect.php");?>

<?php
if(isset($_POST['ok']))
	{
		$p=$_POST['projet'];
	
				$ft = mysql_query('SELECT count(*) as cpt FROM `InventaireADSL` WHERE projet = "'.$p.'"');
				$nb=mysql_fetch_array($ft);
				$ft = $nb['cpt'];
				//echo $ft;
				
				$ftv = mysql_query('SELECT count(*) as cpt FROM `InventaireVDSL` WHERE projet = "'.$p.'"');
				$nbv=mysql_fetch_array($ftv);
				$ftv = $nbv['cpt'];

				//echo $ftv;
				
				$req = 'SELECT count(*) AS cpt, projet FROMP InventaireADSL WHERE projet !=  "" GROUP by projet';
				mysql_query($req);
				
}
?>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
	    fta = <?=$ft; ?>;
        ftv = <?=$ftv; ?>;
        var data = google.visualization.arrayToDataTable([
		
			 
			 
          ['Task', 'Hours per Day'],
          ['ADSL',     fta],
          ['VDSL',      ftv],
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

   <form method="POST" action=""> 
	  <table>
		<tr>
					<td>Select Project :</td>
					<td><select  name="projet" onchange="getContentAjax(this)">
							<option value=""> ---- Select Project ---- </option>
			
	<?php $list = mysql_query('SELECT projet FROM projets WHERE type = "ADSL"') or die ('Erreur SQL !!'.$sql.'<br>'.mysql_error());
															
									while ($result = mysql_fetch_array($list)) {
						
									echo '<option value="'.$result['projet'].'">'.$result['projet'].'</option>';
									}
									?>
			
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="Afficher"></td>
			</tr>
		</table>
		
		
   			 <div id="piechart_3d" style="width: 600px; height: 400px;"></div>
</form>

