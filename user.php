<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->
<head><!--[if lte IE 9 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<!-- iPad Settings -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
<!-- iPad Settings End -->

<title>Gestion du plateforme xDSL</title>
<link rel="shortcut icon" href="images/favicon.jpg">
<link rel="shortcut icon" href="favicon.ico">

<!-- iOS ICONS -->
<link rel="apple-touch-icon" href="touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone4.png" />
<link rel="apple-touch-startup-image" href="touch-startup-image.png">
<!-- iOS ICONS END -->

<!-- STYLESHEETS -->

<link rel="stylesheet" href="css/reset.css" media="screen" />
<link rel="stylesheet" href="css/grids.css" media="screen" />
<link rel="stylesheet" href="css/ui.css" media="screen" />
<link rel="stylesheet" href="css/forms.css" media="screen" />
<link rel="stylesheet" href="css/device/general.css" media="screen" />
<!--[if !IE]><!-->
<link rel="stylesheet" href="css/device/tablet.css" media="only screen and (min-width: 768px) and (max-width: 991px)" />
<link rel="stylesheet" href="css/device/mobile.css" media="only screen and (max-width: 767px)" />
<link rel="stylesheet" href="css/device/wide-mobile.css" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<!--<![endif]-->
<link rel="stylesheet" href="css/jquery.uniform.css" media="screen" />
<link rel="stylesheet" href="css/jquery.popover.css" media="screen">
<link rel="stylesheet" href="css/jquery.itextsuggest.css" media="screen">
<link rel="stylesheet" href="css/themes/lightblue/style.css" media="screen" />



<style type = "text/css">
    #loading-container {position: absolute; top:50%; left:50%;}
    #loading-content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #loading-content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loading-graphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {
	background-color:#abc4ff;
	 background-image: -moz-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%);
	  background-image: -webkit-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%);
	   background-image: -o-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%);
	    background-image: -ms-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%);
		 background-image: radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%);
		  height:100%; width:100%; overflow:hidden; position: absolute; left: 0; top: 0; z-index: 99999;}
</style>

<!-- STYLESHEETS END -->

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->

</head>
<body style="overflow: hidden;">
<div id="wrapper">
        <header>
				<h1><a href="admin.php">SagemCom</a></h1>
            <nav>
                <div class="container_12">
                    <div class="grid_12">
                        
                        <a href="index.php" title="Logout" class="button icon-with-text fr"><img src="images/navicons-small/129.png" alt=""/>Logout</a>
                        <div class="user-info fr">
                            Logged in as <a href="#">User</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        <section>
            <!-- Sidebar -->

            <aside>
                <nav class="drilldownMenu">
                    <h1>
                        <span class="title">Menu</span>
                        <button title="Go Back" class="back">Back</button>
                    </h1>
                    <div class="clearfix" id="searchform">
                        <div class="searchcontainer">
                            <div class="searchbox" onClick="$(this).find('input').focus();">
                                <input type="text" name="q" id="q" autocomplete="off" placeholder="Search...">
                            </div>
                            <input type="button" value="Cancel" />
                        </div>
                        <div class="search_results"></div>
                    </div>                        
                    <ul class="tlm">
					<li class="current"><a href="#dashboard.php" title="Dashboard"><img src="images/navicons/81.png" alt=""/><span>Dashboard</span></a></li>
					  <li class="hasul"><a href="#"><img src="images/navicons/20.png" alt=""/><span>Line management</span></a>
                            <ul>
							
	<li class="hasul"><a href="#sagem.php" title="Calendar"><img src="images/navicons/83.png" alt=""/><span>Alcatel ISAM</span></a>
  <ul>
    <li><a href="#isam.php" title="Calendar"><img src="images/navicons/149.png" alt=""/><span>ADSL</span></a></li>
	<li><a href="#isamVDSL.php" title="Calendar"><img src="images/navicons/149.png" alt=""/><span>VDSL</span></a></li>
    <li><a href="#isamB.php" title="WYSIWYG Editor"><img src="images/navicons/148.png" alt=""/><span>ADSL Bounding</span></a></li>
    <li><a href="#isamVDSLB.php" title="WYSIWYG Editor"><img src="images/navicons/148.png" alt=""/><span>VDSL Bounding</span></a></li>
  </ul>
	<li class="hasul"><a href="#sagem.php" title="Calendar"><img src="images/navicons/26.png" alt=""/><span>Sagem 4400</span></a>
  <ul>
    <li><a href="#sagem.php" title="Calendar"><img src="images/navicons/149.png" alt=""/><span>ADSL</span></a></li>
  </ul>
	<li class="hasul"><a href="#ftth.php" title="Calendar"><img src="images/navicons/83.png" alt=""/><span>FTTH</span></a>
  <ul>
    <li><a href="#ftth_simple.php" title="Calendar"><img src="images/navicons/149.png" alt=""/><span>Simple Config</span></a></li>
	<li><a href="#ftth_project.php" title="Calendar"><img src="images/navicons/148.png" alt=""/><span>Config per project</span></a></li>
  </ul>
                            </ul>
                        </li>
                                                
                        
                                                
                        <li class="hasul"><a href="#tables.html" title="Tables"><img src="images/navicons/29.png" alt=""/><span>Inventory</span></a>
							 <ul>
							
                                <li><a href="#inventaireADSL.php" title="Form Sample 1"><img src="images/navicons/44.png" alt="" width="48" height="48"/><span>ADSL</span></a></li>
                                <li><a href="#inventaireVDSL.php" title="Custom Form Elements"><img src="images/navicons/146.png" alt=""/><span>VDSL</span></a></li>
								<li><a href="#inventaireFTTH.php" title="Custom Form Elements"><img src="images/navicons/130.png" alt=""/><span>FTTH</span></a></li>
                            </ul>
						</li>
						
						 
                      
                        <li class="hasul"><a href="#"><img src="images/navicons/96.png" alt=""/><span>help</span></a>
                            <ul>
                                <li><a href="#services.php" title="Documentation"><img src="images/navicons/171.png" alt=""/><span>Service profile</span></a></li>
								<li><a href="#spectrum.php" title="Documentation"><img src="images/navicons/171.png" alt=""/><span>Spectrum profile</span></a></li>
								<li><a href="#group.php" title="Documentation"><img src="images/navicons/171.png" alt=""/><span>Group profile</span></a></li>
                            </ul>
                        </li>
						 <li class="hasul"><a href="#about.php" title=""><img src="images/navicons/123.png" alt=""/><span>About</span></a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Sidebar End -->

            <section>
                <header>
                    <div class="container_12 clearfix">
                        <a href="#menu" class="showmenu button">Menu</a>
                        <h1 class="grid_12">Dashboard</h1>
                    </div>
                </header>
                <section id="main-content" class="clearfix">                </section>
                <footer class="clearfix">
                    <div class="container_12">
                        <div class="grid_12">
                            Generated &copy; 2015. at <a target="_blank" href="">SST</a>                        </div>
                    </div>
                </footer>
            </section>

            <!-- Main Section End -->
        </section>
        <div id="loading">
          <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='images/ajax-loader-abc4ff.gif' /> " +
                           "Loading...</p></div>");
        </script>
        </div>
    </div>
    
    <!-- MAIN JAVASCRIPTS -->
    <script src="//code.jquery.com/jquery-1.7.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery.min.js'>\x3C/script>")</script>
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="js/jquery.itextsuggest.js"></script>
    <script type="text/javascript" src="js/jquery.itextclear.js"></script>
    <script type="text/javascript" src="js/jquery.hashchange.min.js"></script>
    <script type="text/javascript" src="js/jquery.drilldownmenu.js"></script>
    <script type="text/javascript" src="js/jquery.popover.js"></script>
    
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/PIE.js"></script>
    <script type="text/javascript" src="js/ie.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/global.js"></script>
    <!-- MAIN JAVASCRIPTS END -->

    <!-- LOADING SCRIPT -->
    <script>
    $(window).load(function(){
        $("#loading").fadeOut(function(){
            $(this).remove();
            $('body').removeAttr('style');
        });
    });
    </script>
    <!-- LOADING SCRIPT -->
    
    <!-- POPOVERS SETUP-->
   

    <script>
        $(document).ready(function() {
            $('#activity-button').popover('#activity-popover', {preventRight: true});
            $('#notifications-button').popover('#notifications-popover', {preventRight: true});
            $('#settings-button').popover('#settings-popover', {preventRight: true});

            /**
             * setup search
             */
            function googleSearch(q){
                $('#searchform .searchbox a').fadeOut()
                $.ajax({
                    url: 'php/google_search_results.php',
                    data: 'q='+encodeURIComponent(q),
                    cache: false,
                    success: function(response){
                        $('.search_results').html(response);
                    }
                });
            }

            // Set iTextSuggest
            $('#searchform .searchbox').length && $('#searchform .searchbox').find('input[type=text]').iTextClear().iTextSuggest({
                url: 'php/google_suggestions_results.php',
                onKeydown: function(query){
                    googleSearch(query);
                },
                onChange: function(query){
                    googleSearch(query);
                },
                onSelect: function(query){
                    googleSearch(query);
                },
                onSubmit: function(query){
                    googleSearch(query);
                },
                onEmpty: function(){
                    $('.search_results').html('');
                }
            }).focus(function(){
                $('#wrapper > section > aside > nav > ul').fadeOut(function(){
                    $('#searchform .search_results').show();
                });
                $(this).parents('#searchform .searchbox').animate({marginRight: 70}).next().fadeIn();
            });
            
            $('#searchform .searchcontainer').find('input[type=button]').click(function(){
                $('#searchform .search_results').hide();
                $('#searchform .searchbox').find('input[type=text]').val('');
                $('#searchform .search_results').html('');
                $('#wrapper > section > aside > nav > ul').fadeIn();
                $('.searchbox', $(this).parent()).animate({marginRight: 0}).next().fadeOut();
            });
        });
    </script>
    <!-- POPOVERS SETUP END-->

</body>
</html>
