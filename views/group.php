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


       <h1 class="page-title">Group profile</h1>
                <div class="container_12 clearfix leading">
                    <div class="grid_12">
                      <div id="demo" class="clearfix"> 
                        <table class="display" id="example"> 
                                <thead> 
                                    <tr> 
                                        <th >ID</th> 
                                        <th >Name</th> 
                                        <th >plan-bitrate-up</th> 
										<th >plan-bitrate-down</th> 
                                        <th >max-bitrate-up</th> 
										<th >min-bitrate-up</th>
                                        <th >max-bitrate-down</th>   
                                        <th >min-bitrate-down</th> 
                                    </tr> 
                                </thead> 
                                
                                    
							<?php

								$sql ='SELECT * FROM `group_profile` ';				
								$results = mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
								
								echo '<tbody>';
									while ($data = mysql_fetch_array($results)) {
									// on affiche les résultats
									echo '<tr'.' class="gradeA">'; 
										
										echo '<td class="center">'.$data[0].'</td>'; 
										echo '<td class="center"><a href="#null" onclick="javascript:open_infos();">'.$data[1].'</a></td>'; 
										echo '<td class="center">-</td>'; 
										echo '<td class="center">-</td>'; 
										echo '<td class="center">-</td>'; 
										echo '<td class="center">-</td>'; 
										echo '<td class="center">-</td>'; 
										echo '<td class="center">-</td>'; 
									echo '</tr> ';	
                                        
							        }
								echo '</tbody>';
								
?>
                                         
                                    
                                
                        </table> 
							
				
                        </div>
                        
						 	
</div>

               
</div>
                </div>