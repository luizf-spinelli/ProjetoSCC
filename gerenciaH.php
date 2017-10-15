<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
    </head>

<?php include("./fix/header.php"); ?>
    
    	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Gerenciar</span></h1>
			<p class="page-description">
				Liste, edite, remova e gerencie.
			</p>
			
		</div>

	</div>
            <div class="container">
            <div class="row">
<?php include("./fix/welcome.php"); ?>                
            </div>
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <b><a style="text-decoration: underline" href="gerenciaH.php">Gerenciar</a></b></p>
            </div>
        
    
        <div class="section-home about-us fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-users fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Clientes</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de seus clientes.</p>
                          
                        </div>
                        <a href="show.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>

                <div class="col-md-4 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Medidas</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de suas medidas.</p>
                          
                        </div>
                        <a href="#" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>

                <div class="col-md-4 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-comment-o fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Pedidos</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de seus pedidos.</p>
                          
                        </div>
                        <a href="managePed.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>
                
            </div>

        </div>
      
    </div> <!-- /.about-us --> <br/>
    
<?php include("./fix/private-footer.php"); ?>
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>
    </body>
</html>