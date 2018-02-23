<style type = "text/css">
    
    function popup(){
	#loading-container {position: absolute; top:50%; left:50%;}
    #loading-content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #loading-content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loading-graphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {background-color:#abc4ff; background-image: -moz-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: -webkit-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: -o-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: -ms-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); height:100%; width:100%; overflow:hidden; position: absolute; left: 0; top: 0; z-index: 99999;}

				document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='images/ajax-loader-abc4ff.gif' /> " +
                           "Loading...</p></div>");
					}

</style>



<body class="login" style="overflow: hidden;">
    <div id="loading"> 

        <script type = "text/javascript"> 
        
/*
        document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='images/ajax-loader-abc4ff.gif' /> " +
                           "Loading...</p></div>");
*/
        popup();
        </script> 
        
        <a href="" OnClick="popup()">test</a>

    </div> 
 </body>    
