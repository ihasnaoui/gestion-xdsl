<?php $adr = $_SERVER['SERVER_ADDR'];?>
<link rel="stylesheet" media="screen" href="css/docs.css" />
<!-- WIZARD SETUP -->
<script type="text/javascript" src="js/jquery.wizard.js"></script>
    <script>
        $(function(){
            $('.wizard').wizard();
        });
    </script>
<!-- WIZARD SETUP END -->
<h1 class="page-title">Alcatel ISAM</h1>
<div class="container_12 clearfix">
	<section class="portlet grid_12 leading docs">
		<header>
    		<h2>ADSL</h2>
    	</header>
    	<section>
    	
    		
    		<!-- the form --> 
            <form action="#" novalidate>
            	<div class="wizard"> 
                    <nav>
                        <ul class="clearfix">
                            <li class="active"><strong>1.</strong> Configuration of PVC</li> 
                            <li><strong>2.</strong> Configuration by Project</li> 
                            <li><strong>3.</strong> Configuring Services</li> 
                        </ul>
                    </nav>
             
                    <div class="items"> 
                        <!-- page1 --> 
                        <section> 
                           
                            <section>
                                <ul class="clearfix">
                                    <!-- email --> 
                                    <li> 
                                        <iframe src="" height="300" width="800" ></iframe>
                                    </li> 
									<input type="submit" class="full" value="" >
                                </ul>
                            </section>
                            <footer class="clearfix">
                                <button type="button" class="next fr">Proceed &raquo;</button> 
                            </footer>
                        </section> 
             
                        <!-- page2 --> 
                        <section> 
                            
                            <section>
                                <ul class="clearfix">
                                    <!-- address --> 
                                   <li> 
                                        <iframe src="" height="300" width="800" ></iframe>
                                    </li> 
									<input type="submit" class="full" value="" 
                                </ul> 
                            </section>
                            <footer class="clearfix">
                                <button type="button" class="prev fl">&laquo; Back</button> 
                                <button type="button" class="next fr">Proceed &raquo;</button> 
                            </footer>
                        </section> 
             
                        <!-- page3 --> 
                        <section> 
                           
                            <section>
							<ul>
                               <li> 
                                        <iframe src="" height="300" width="800" ></iframe>
                                    </li> 
									<input type="submit" class="full" value="" />
							</ul>		
                            </section>
                            <footer class="clearfix">
                                <button type="button" class="prev">&laquo; Back</button> 
                            </footer>
                        </section> 
                    </div><!--items--> 
                </div><!--wizard--> 
            </form>
