<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Contato</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        
        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">  
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
    </head>
    
<?php include("./fix/public-header.php"); ?>

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CONTATO <span class="title-under"></span></h1>
			<p class="page-description">
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">
                            

                <div class="col-md-6 col-md-offset-1 col-contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.443848079953!2d-46.37437298444656!3d-23.94474018174789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1b5082b41615%3A0xb6b89004d29d19f0!2sR.+Casemiro+Giangiulio%2C+74+-+Areia+Branca%2C+Santos+-+SP%2C+11086-080!5e0!3m2!1spt-BR!2sbr!4v1499706050972" 
            width="380" height="550" style="position: relative;" frameborder="0" style="border:2" allowfullscreen></iframe>                    
                </div>


				<div class="col-md-4 col-sm-12 col-contact">

					<h2 class="title-style-2"> CONTATO <span class="title-under"></span></h2>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Rua Casemiro Giangiulio, 74 - Santos/SP</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-whatsapp "></i></span> (13) 99999-9999</li>
                                                        <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone "></i></span> (13) 3333-3333</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> contact@contact.com</li>
						</ul>
					</div>					
					
				</div>
                                <div class="col-md-4 col-sm-12 col-form">

					<h2 class="title-style-2">MENSAGEM<span class="title-under"></span></h2>

					<form action="php/mail.php" class="contact-form ajax-form">

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" name="name" class="form-control" placeholder="Nome*" required>
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
	                        </div>
							
						</div>
                                            

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Mensagem*" required></textarea>
                        </div>

                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Enviar</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

			</div> <!-- /.row -->

		</div>
        </div>
    
<?php include("./fix/footer.php"); ?>

        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Google map  -->
        <script src="" type="text/javascript"></script>

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