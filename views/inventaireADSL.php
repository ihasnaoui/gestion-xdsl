<?php include_once("../connect.php");?>

<!-- DATATABLES CSS -->

<link rel="stylesheet" media="screen" href="lib/datatables/css/vpad.css" />
<script type="text/javascript" src="lib/datatables/js/jquery.dataTables.js"></script> 
<script type="text/javascript"> 
    
	  $(document).ready(function() {
        $('#example').dataTable( {
            "sPaginationType": "full_numbers"
        } );
    } );
</script> 
<!-- DATATABLES CSS END -->

                <h1 class="page-title">Inventory ADSL</h1>
                <div class="container_12 clearfix leading">
                    <div class="grid_12">
                        <div id="demo" class="clearfix"> 
                            <table class="display" id="example"> 
                                <thead> 
                                    <tr> 
                                        <th>Line</th> 
                                        <th>Project</th> 
                                        <th>Port</th> 
                                        <th>User</th> 
                                        <th>State</th> 
                                    </tr> 
                                </thead> 
                               <?php
							   
				
					
				
							   
								$sql ='SELECT * FROM InventaireADSL';				
								$results = mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
								
								//$sql1 ='SELECT ligne,etat FROM etat_ADSL';				
								//$results = mysql_query ($sql) or die ('Erreur SQL !'.$sql1.'<br />'.mysql_error());
								
								echo '<tbody>';
									while ($data = mysql_fetch_array($results)) {
									// on affiche les résultats
									echo '<tr'.' class="gradeA">'; 
										
										echo '<td class="center">'.$data[0].'</td>'; 
										echo '<td><a href="#null" onclick="javascript:open_infos();">'.$data[2].'</a></td>'; 
										echo '<td class="center">'.$data[1].'</td>'; 
										echo '<td class="center">'.$data[3].'</td>'; 
										echo '<td class="center">'.$data[4].'</td>'; 
										
									echo '</tr> ';	
                                        
							        }
								
								echo '</tbody>';
								
								
?>
                            </table> 
                        </div>
                          
                       
                    </div>
                </div>
