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
			
			<h1 class="page-title">Esquematize <span class="title-under"></span></h1>
			<p class="page-description">
				Solicite ao administrador ou insira a chave de acesso para prosseguir. 
			</p>
			
		</div>

	</div><br/>
        	<div class="main-container fadeIn animated">

                    <div class="container">

			<div class="row">
                            
                            <div class="col-md-3 col-sm-12 col-form"></div>

				<div class="col-md-6 col-sm-6 col-form">

					<h2 class="title-style-2">Login<span class="title-under"></span></h2>
            <?php   
                    if(isset($_SESSION['msg1'])){                    
                    echo $_SESSION['msg1'];
                    unset($_SESSION['msg1']);
                    session_destroy();
            } 
            ?>

                                        <form action="esquema.php" method="post">

						<div class="row">

                                                        <div class="form-group col-md-6">
                                                            <input type="password" name="chave" pattern="^[a-zA-Z0-9]+$" maxlength="25" class="form-control" placeholder="Chave*" required>
                                                        </div>
                                                    <div class="form-group col-sm-6">                            
                            <button type="submit" class="btn btn-primary pull-right">Entrar</button>
                                                    </div>
						
						</div>
                         
                                        </form>
                        <br/><br/>                
                        <p style="text-align: justify">Esquematize é um canal de comunicação direta conosco. Através deste canal, você poderá esquematizar seu pedido ou orçamento, para que
                        possamos compreender todos os detalhes de como você o quer! Entre com a chave de acesso ou solicite-a para o administrador.</p>

                                </div>  
                        </div>                        
                </div>
 
                </div><br/><br/><br/><br/>

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