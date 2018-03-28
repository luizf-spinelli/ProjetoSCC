<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Login</title>
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

<?php include("./fix/public-header.php"); ?>
    
    <body>
        <div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">ÁREA RESTRITA <span class="title-under"></span></h1>
			<p class="page-description">
				Por favor, insira suas informações de acesso para prosseguir.
			</p>
			
		</div>

	</div><br/>
        	<div class="main-container fadeIn animated">

                    <div class="container">

			<div class="row">
                            
                            <div class="col-md-3 col-sm-12 col-form"></div>

				<div class="col-md-6 col-sm-12 col-form">

					<h2 class="title-style-2">Login<span class="title-under"></span></h2>

                                        <form action="valida.php" method="post">

						<div class="row">

							<div class="form-group col-md-6">
                                                            <input type="text" name="usuario" pattern="^[a-zA-Z0-9]+$" maxlength="25" class="form-control" placeholder="Usuário*" required>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <input type="password" name="senha" pattern="^[a-zA-Z0-9]+$" maxlength="25" class="form-control" placeholder="Senha*" required>
                                                        </div>
							
						</div>

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Entrar</button>
                        </div>
                                        </form>
                                </div>
                        </div>
                </div>                   
                </div><br/><br/><br/>

        <?php include("./fix/footer.php"); ?>
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

    </body>
</html>