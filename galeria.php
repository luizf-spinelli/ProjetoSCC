<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Galeria</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        
        <!--<link rel="stylesheet" href="assets/css/multizoom.css" type="text/css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

        <script type="text/javascript" src="assets/js/multizoom.js"></script>

        <script type="text/javascript">

        jQuery(document).ready(function($){

                $('#image1').addimagezoom({ // single image zoom
                        zoomrange: [2, 10],
                        magnifiersize: [500,500],
                        magnifierpos: 'right',
                        cursorshade: true,
                        largeimage: 'hayden.jpg' //<-- No comma after last option!
                })


                $('#image2').addimagezoom() // single image zoom with default options

                $('#multizoom1').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
                        descArea: '#description', // description selector (optional - but required if descriptions are used) - new
                        speed: 1500, // duration of fade in for new zoomable images (in milliseconds, optional) - new
                        descpos: true, // if set to true - description position follows image position at a set distance, defaults to false (optional) - new
                        imagevertcenter: true, // zoomable image centers vertically in its container (optional) - new
                        magvertcenter: true, // magnified area centers vertically in relation to the zoomable image (optional) - new
                        zoomrange: [2, 10],
                        magnifiersize: [300,300],
                        magnifierpos: 'right',
                        cursorshadecolor: '#1f76bd',
                        cursorshade: true //<-- No comma after last option!
                });

                $('#multizoom2').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
                        descArea: '#description2', // description selector (optional - but required if descriptions are used) - new
                        disablewheel: true // even without variable zoom, mousewheel will not shift image position while mouse is over image (optional) - new
                                        //^-- No comma after last option!	
                });

        })
        </script>-->
    </head>
    
<?php include("./fix/public-header.php"); ?>

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">GALERIA <span class="title-under"></span></h1>
			<p class="page-description">
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<!--<div class="container gallery fadeIn animated">

			<div class="row">

<div class="targetarea center-block" style="border:1px solid #eee"><img id="multizoom1" alt="zoomable" title="" src="assets/images/gallery/fantasias/thumb 280x230/thumb01.jpg"/></div>
<div id="description"></div>
<div class="multizoom1 thumbs">
<a href="assets/images/gallery/fantasias/thumb 280x230/thumb01.jpg" data-large="assets/images/gallery/fantasias/im01.jpg" data-title="Posicione o mouse sobre a imagem para ver em detalhe." class="col-md-3 col-sm-4 gallery-item"><img src="assets/images/gallery/fantasias/thumb 280x230/thumb01.jpg" alt="" title=""/></a> 
<a href="assets/images/gallery/fantasias/thumb 280x230/thumb02.jpg" data-large="assets/images/gallery/fantasias/im02.jpg" data-title="Posicione o mouse sobre a imagem para ver em detalhe." class="col-md-3 col-sm-4 gallery-item"><img src="assets/images/gallery/fantasias/thumb 280x230/thumb02.jpg" alt="" title=""/></a> 
</div>
                        </div>
                </div><hr/>-->
            		<div class="container gallery fadeIn animated">

			<div class="row">
                            
                            <h2 class="title-style-2"> Galeria <span class="title-under"></span></h2>                            

                            <a href="assets/images/gallery/fantasias/im01.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="assets/images/gallery/fantasias/thumb 280x230/thumb01.jpg" alt="">

						<span class="on-hover">
							<span class="hover-caption">Clique para ampliar</span>
						</span>

					</a> <!-- /.gallery-item -->

                                        <a href="assets/images/gallery/fantasias/im02.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                                            <img src="assets/images/gallery/fantasias/thumb 280x230/thumb02.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Clique para ampliar</span>
						</span>
						
					</a> <!-- /.gallery-item -->

					
				
			</div>
			
		</div>


	</div> <!-- /.main-container  -->


<?php include("./fix/footer.php"); ?>
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>

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

