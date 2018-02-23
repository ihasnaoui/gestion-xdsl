<?php include_once("../connect.php");?>


	<?php
	if(isset($_POST['ok']))
	{
		$p=$_POST['projet'];
	
   
				//$p = mysql_query("SELECT DISTINCT(projet) FROM projets");
				$ft = mysql_query('SELECT count(*) as cpt FROM `InventaireADSL` WHERE projet = "'.$p.'"');
				$nb=mysql_fetch_array($ft);
				$ft = $nb['cpt'];
				
				$ftv = mysql_query('SELECT count(*) as cpt FROM `InventaireVDSL` WHERE projet = "'.$p.'"');
				$nbv=mysql_fetch_array($ftv);
				$ftv = $nbv['cpt'];
				//~ echo $ft;
				
			 echo '<div id="chart_div" style="width: 900px; height: 500px;"></div>';

	}	
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  fta = <?=$ft; ?>;
  ftv = <?=$ftv; ?>;
  //pr = <?=$p; ?>;
  var data = google.visualization.arrayToDataTable([
    ['Projet', 'ADSL', 'VDSL', 'FTTH'],
    //[pr,  fta,      ftv,     1]
	['',  fta,      ftv,     1]
/*
    ['Bbox',  165,      938,         522],
    ['2005/06',  135,      1120,        599],
    ['2006/07',  157,      1167,        587],
    ['2007/08',  139,      1110,        615],
    ['2008/09',  136,      691,         629]
*/
  ]);


  var options = {
    title : 'Statistique des lignes par projet',
    vAxis: {title: "Nb Lingne"},
    hAxis: {title: "Projet"},
    seriesType: "bars",
    series: {5: {type: "line"}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
    </script>
  </head>
  <body>
	 <center> 
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
		
		
	  </form>
	  </center>
		<div id="chart_div" style="width: 500px; height: 300px;"></div>
  </body>
</html>
