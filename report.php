<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura e Confecção - Sobre</title>
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
    
<?php include("./fix/header.php"); ?>

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title"><?= $MensagemErro ?> <span class="title-under"></span></h1>
			
		</div>

	</div><br/><br/><br/><br/>

	<div class="main-container center-block">

        <div class="container">

            <div class="row">
                
                <div class="col-md-12 col-sm-12">
                    
                    <p style="font-size:18px; text-align:center;"><?= $MensagemErro ?></p>
                    
                </div> <!-- /.home-reasons -->
                <a href="show.php"><button class="btn btn-primary center-block">Voltar</button></a>
            </div>
        </div>  
    </div><br/><br/><br/><br/>

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