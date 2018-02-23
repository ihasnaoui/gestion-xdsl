<!-- FULLCALENDAR CSS -->
<link rel="stylesheet" media="screen" href="lib/fullcalendar/fullcalendar.css" />

<script type = "text/javascript"> 
$('#popover-button').popover(
    '#popover-div',{ 
    preventRight: true, 
    preventLeft: true, 
    preventBottom:true }
);
</script>
<!-- FULLCALENDAR CSS END -->

 
<script type="text/javascript">
function getHU()
{
var hu = document.getElementById("hu").value;
//alert(hu);
for(i=0; i<hu; i++)
		{
		document.getElementById("champs" ).innerHTML = document.getElementById("champs" ).innerHTML+'<input type="checkbox" name="image'+i+'" />'+i+'<br/>'; 
		}
} 
</script>

</head>
 
<body>
<br />
<div id="champs"></div>
 
 
 <br>
 </TD></P></FIELDSET>
 <input type="submit" name="valider" value="ENVOYER"/>
 <br>

 </div>
</div>


					</div>
           </div>

            
<!-- FULLCALENDAR --><!-- FULLCALENDAR END -->


<html>

 <head>

 <title>Liens</title>

 </head>

<body>
 <div>
<form method="post">
<input type="text" name="text">
<input type="submit" name="ok" >
</form>
<?php
	
	if(isset($_POST['ok']))
	{
		$n = $_POST['text'];
		
		exec("expect show_pvc.sh $n | grep pvc | awk 'FNR >= 2 {print $2}' ",$output);
		
		//print_r($output[1]);echo'<br>';
		$r = count($output);
		echo '<form method="POST">';
		for ($i=0;$i<$r;$i++)
		{
			
				echo '<input type="checkbox" value ="<?php $output[$i] ?>"> '.$output[$i];
			
		}
		echo '<input type="submit" name="okk" value="Del" >';
		echo'<br />';
		echo'<br />';
		echo '</form>';
	}

?>



</div>
</body>

</html>
 
