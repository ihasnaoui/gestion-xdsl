<?php $adr = $_SERVER['SERVER_ADDR'];

?>
<link rel="stylesheet" media="screen" href="css/docs.css" />
<!-- WIZARD SETUP -->
<script type="text/javascript" src="js/jquery.wizard.js"></script>
    <script>
        $(function(){
            $('.wizard').wizard();
        });
    </script>
<!-- WIZARD SETUP END -->
<h1 class="page-title">Inventory Setting</h1>
<div class="container_12 clearfix">


    	
		
		
                    <section class="tabs grid_12 leading">
                        <ul class="clearfix">
                            <li><a href="#">ADSL</a></li>
                            <li><a href="#">VDSL</a></li>
                            <li><a href="#">FTTH</a></li>
                   
                        </ul>
                        <section>
                            <section class="clearfix">
                             
             
     <iframe src="http://<?php echo $adr; ?>/infra_atr/scripts/notif/inventaireS/ajouterADSL.php" height="200" width="700" ></iframe>
                               
                    </section>
                    <section class="clearfix">
                     
     <iframe src="http://<?php echo $adr; ?>/infra_atr/scripts/notif/inventaireS/ajouterVDSL.php" height="200" width="800" ></iframe>
                    
                    </section>
                    <section class="clearfix">
                           
     <iframe src="http://<?php echo $adr; ?>/infra_atr/scripts/notif/inventaireS/ajouterFTTH.php" height="300" width="800" ></iframe>
                   
                    </section>
                             </section>
                        </section>
                    </section>
                   
    		
