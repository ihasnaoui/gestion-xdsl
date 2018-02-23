<?php include_once("../connect.php");
//include_once("../pChart/Example10.php");
$adr = $_SERVER['SERVER_ADDR'];
?>
<!-- jQplot CSS -->
<link rel="stylesheet" media="screen" href="lib/jqplot/jquery.jqplot.min.css" />
<!-- jQplot CSS END -->

<script language="javascript"> 
<!-- 
function popupcentree(page,largeur,hauteur,options) {     
        var top=(screen.height-hauteur)/2;     
        var left=(screen.width-largeur)/2;     
        window.open(page,"","top="+top+",left="+left+",width="
	+largeur+",height="+hauteur+","+options); 
} 
--> 
	</script>

                <h1 class="page-title">Dashboard</h1>
                <div class="container_12 clearfix leading">
                  <section class="grid_12"></section> 
                
                    <section class="portlet grid_6 leading"> 
 
                        <header>
                            <h2>Alcatel ISAM </h2> 
                        </header>
                        
                        <section>
						<?php
						#### SLOTE 02
						$sql = 'SELECT nb_down as cpt FROM `p_actif_slot` WHERE slot = "2"';
							//$vb = mysql_result($sql);
							
							$row=mysql_fetch_array(mysql_query($sql));
							$cpt = 48 - $row['cpt'];
						
						#### SLOTE 04
						$sql1 = 'SELECT nb_down as cpt FROM `p_actif_slot` WHERE slot = "4"';
							//$vb = mysql_result($sql);
							
							$row=mysql_fetch_array(mysql_query($sql1));
							$cpt1 = 48 - $row['cpt'];
						
						#### SLOTE 08
						$sql2 = 'SELECT nb_down as cpt FROM `p_actif_slot` WHERE slot = "8"';
							//$vb = mysql_result($sql);
							
							$row=mysql_fetch_array(mysql_query($sql2));
							$cpt2 = 48 - $row['cpt'] ;
						
						#### SLOTE 10
						$sql3 = 'SELECT nb_down as cpt FROM `p_actif_slot` WHERE slot = "10"';
							//$vb = mysql_result($sql);
							
							$row=mysql_fetch_array(mysql_query($sql3));
							$cpt3 = 48 -$row['cpt'];
							
							
						
						?>
                            <table class="full"> 
 
                                <tbody> 
 
                                    <tr> 
 
                                        <td>Number of Slot </td> 
 
                                        
 
                                        <td class="ar">04 Slot </td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Port/Slot</td> 
 
                                        
 
                                        <td class="ar">48 Port </td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Active ADSL line </td> 
 
                                        
 
                                        <td class="ar"><?php echo $cpt+$cpt1; ?> Port </td> 
 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Active VDSL line </td> 

                                         
 
                                        <td class="ar"><?php  echo $cpt2+$cpt3; ?> Port</td> 
 
                                    </tr> 
 
                                </tbody> 
 
                            </table>
                            
                        </section>
                        
                    </section> 
 
                    <section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Sagem 4400 </h2>
                        </header>

                        <section>
                          <table class="full">
                            <tbody>
                              <tr>
                                <td>Number of Slot </td>
                                
                                <td class="ar">02 Slot </td>
                              </tr>
                              <tr>
                                <td>Port/Slot</td>
                                
                                <td class="ar">24 Port </td>
                              </tr>
                              <tr>
                                <td>Active line </td>
                                
                                <td class="ar">x Port </td>
                              </tr>
                              <tr>
                                <td>Inactive line</td>
                                
                                <td class="ar">y Port </td>
                              </tr>
                            </tbody>
                          </table>
                        </section>
                    </section> 
 
                   

                    <section class="portlet grid_6 leading"> 
 
                        <header>
                            <h2>Statistics Slot : <a href="#">04</a></h2>
                        </header>

                        <section>
                            <table class="full">
 
                                <tbody> 
 
                                    <tr> 
 
                                        <td>Slote 02 </td> 
 										<?php $p = intval(($cpt/48)*100) ; ?>
                                        <td><div id="progress1" class="progress"><a href="" onClick='javascript:popupcentree("../infra_atr/popup/pop.php",250,250,"menubar=no,scrollbars=no,statusbar=no")'><span style="width: <?php echo $p; ?>%;"><b><?php echo $p; ?>%</b></span></a></div></td> 
 
                                        <td style="width:40px" class="ar"><?php echo $cpt; ?>/48</td> 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Slote 04</td> 
 									<?php $p1 = intval(($cpt1/48)*100) ; ?>
                                        <td><div class="progress"><a href="" onClick='javascript:popupcentree("../infra_atr/chart/speed.php",200,200,"menubar=no,scrollbars=no,statusbar=no")'><span style="width: <?php echo $p1; ?>%;"><b><?php echo $p1; ?>%</b></span></a></div></td> 
 
                                        <td class="ar"><?php echo $cpt1; ?>/48</td> 
                                    </tr> 
									
                                    <tr> 
 
                                        <td>Slote 06 </td> 
 		
                                        <td><div class="progress"><span style="width: 0%;"><b>0%</b></span></div></td> 
 
                                        <td class="ar">0/48</td> 
                                    </tr>
 
                                    <tr> 
 							<?php $p2 = intval(($cpt2/48)*100) ; ?>
                                        <td>Slote 08</td> 
 
                                        <td><div class="progress"><span style="width: <?php echo $p2; ?>%;"><b><?php echo $p2; ?>%</b></span></div></td> 
 
                                        <td class="ar"><?php echo $cpt2; ?>/48</td> 
                                    </tr> 
 
                                    <tr> 
 
                                        <td>Slote 10 </td> 
 							<?php $p3 = intval(($cpt3/48)*100) ; ?>
                                        <td><div class="progress"><span style="width: <?php echo $p3; ?>%;"><b><?php echo $p3; ?>%</b></span></div></td> 
 
                                        <td class="ar"><?php echo $cpt3; ?>/48</td> 
                                    </tr>
                                </tbody> 
                            </table>
                        </section>
                    </section>
 
                    

                    
                    
                    
                    
                    <section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Statistics projects</h2>
                        </header>

                        <section>
                        <div style="width:100%;height:160px;">
	   <center><img src="http://chart.apis.google.com/chart?cht=p3&chd=t:<?php echo $cpt;?>,<?php echo $cpt1;?>,<?php echo $cpt2;?>,<?php echo $cpt3;?>&chs=335x140&chco=00CC00,0000CC,CC0000&chl=Slot02 <?php echo $p;?>%|Slot04 <?php echo $p1;?>%|Slot08 <?php echo $p2;?>%|Slot10 <?php echo $p3;?>%" ></center>
                        </div>
                        </section>

                    </section> 
                    <section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Statistics projects</h2>
                        </header>

                        <section>
                        
                            <div class="jqPlot" id="chart2" style="width:100%;height:160px;"></div>
                        </section>

                    </section> 
                    
                    <div class="clear"></div>
					<section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Statistics projects</h2>
                        </header>

                        <section>                          	
                        </section>

                    </section> 
                    
                    
                   
                    <div class="clear"></div>
                    
					<section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Statistics projects</h2>
                        </header>

                        <section>
                            	
                        </section>

                    </section>                     
		<section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Statistics projectss</h2>
                        </header>

                        <section>
                            	
                        </section>

                    </section> 
                    
                    
                   
                    <div class="clear"></div>
					<section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Statistics projects</h2>
                        </header>

                        <section>
                            	
                        </section>

                    </section> 
                    
						<section class="portlet grid_6 leading"> 

                        <header>
                            <h2>Statistics projects</h2>
                        </header>

                        <section>
                            	
                        </section>

                    </section> 
                    
                    
                   
                    <div class="clear"></div>
                    
                   
                </div>
				
				<?php 
					/*$resultADSL = mysql_query ('SELECT projet,count(*) FROM `InventaireADSL` Group by `projet`');
					$resultVDSL = mysql_query ('SELECT projet,count(*) FROM `InventaireVDSL` Group by `projet`');
					$projets =  mysql_query ('SELECT DISTINCT(projet) FROM `projets` ');
					
							//while ($result = mysql_fetch_array($projets)) {echo $result['projet'].',';}echo '<br>';
							//while ($result1 = mysql_fetch_array($resultADSL)) {echo $result1[1].',';}	echo '<br>';
							//while ($result2 = mysql_fetch_array($resultVDSL)) {echo $result2[1].',';}echo '<br>';
							
							
							while ($result = mysql_fetch_array($projets)) {
			$row=mysql_fetch_array(mysql_query('SELECT count(*) FROM `InventaireADSL` WHERE `projet` = "'.$result['projet'].'"'));
			$row1=mysql_fetch_array(mysql_query('SELECT count(*) FROM `InventaireVDSL` WHERE `projet` = "'.$result['projet'].'"'));
							echo $result['projet'].'='; echo $row[0];echo '****';echo $row1[0]; echo '<br>';
							}
							*/
					
							
				
				?>

    <!-- jQplot SETUP -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/jqplot/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript" src="lib/jqplot/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="lib/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script type="text/javascript" src="lib/jqplot/plugins/jqplot.barRenderer.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var line1 = [10,4, 9, 16];
        var line2 = [25, 12.5, 6.25, 3.125];
        var line3 = [2, 7, 15, 30];
        var plot2 = $.jqplot('chart2', [line1, line2, line3], {
            show: true,
            legend:{show:true, location:'ne', xoffset:0},
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer, 
                rendererOptions:{barPadding: 8, barMargin: 10, shadowDepth: 2}
            },
            series:[
                {label:'Profits'}, 
                {label:'Expenses'}, 
                {label:'Sales'}
            ],
            axes:{
                xaxis:{
                    renderer:$.jqplot.CategoryAxisRenderer, 
                    ticks:['1st Qtr', '2nd Qtr', '3rd Qtr', '4th Qtr']
                }, 
                yaxis:{min:0}
            }
        });
    });
    </script>
    <!-- jQplot SETUP END -->
