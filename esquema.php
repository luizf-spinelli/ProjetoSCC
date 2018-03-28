<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Esquema</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <!-- Literally Canvas -->
        <link href="./assets/css/literallycanvas.css" rel="stylesheet">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <style type="text/css">
        .fs-container {
        width: auto;
        height: auto;        
        margin: auto;
        }

        .literally {
        width: 100%;
        height: 500px;
        position: relative;
        }
        </style>
        
    </head>
    
<?php include("./fix/public-header.php"); ?>

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">ESQUEMA <span class="title-under"></span></h1>
			<p class="page-description">
			</p>
			
		</div>

	</div>

	<div class="main-container">
            <div class="container">   
                
                <div class="col-md-12">
                   
                        <div class="fs-container">
                            <div id="lc"></div>
                        </div>



    <script src="./assets/js/react-0.14.3.js"></script>
    <script src="./assets/js/literallycanvas.js"></script>

    <script type="text/javascript">
      var lc = LC.init(document.getElementById("lc"), {
        imageURLPrefix: './assets/images/lc-images',
        toolbarPosition: 'bottom',
        defaultStrokeWidth: 3,
        strokeWidths: [2, 3, 4, 6, 8, 15, 25]
      });
    </script>
    
                </div>
            </div>


		</div>
    
<?php include("./fix/footer.php"); ?>

        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>  
        
        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>	