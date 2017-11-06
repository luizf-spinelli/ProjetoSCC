<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Cadastro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="../../assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="../../assets/js/modernizr-2.6.2.min.js"></script>
     
      
    </head>
    
<?php include("../../fix/header.php"); ?>

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CADASTRAR SERVIÇO <span class="title-under"></span></h1>
			<p class="page-description">
				Preencha os campos para realizar o cadastro de um novo serviço.
			</p>			
		</div>
	</div>
    
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>                
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="cadastro.php">Cadastrar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="createServ.php">Serviço</a></b></p>
            </div>
    
	<div class="main-container fadeIn animated">

		<div class="container">
                    
			<div class="row">                            

				<div class="col-md-10 col-sm-12 col-form">

					<h2 class="title-style-2">CADASTRO<span class="title-under"></span></h2>

                                        <form action="createServ.php" method="post">
						<div class="row">

                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-asterisk"></i></span> ID*:
                                    <input type="text" name="IDSERV" pattern="([0-9]{1,4})" value="<?= $idserv ?>" maxlength="4" class="form-control" placeholder="" required>
	                        </div>
                                                    
                                <div class="form-group col-md-7">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Tipo*:
	                            <input type="text" name="TP" value="<?= $tp ?>" maxlength="50" class="form-control" placeholder="" required>
	                        </div>
                                                    
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-money"></i></span> Valor base (R$)*:
                                    <input type="text" name="VLB" pattern="([0-9]{0,5}.{0,1}[0-9]{0,2})" value="<?= $vlb ?>" maxlength="7" class="form-control" placeholder="" required>
	                        </div>
                                                    
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-calendar"></i></span> <b>Duração (dias)*:</b>
                                    <input type="text" name="DUR" pattern="([0-9]{1,4})" value="<?= $dur ?>" maxlength="4" class="form-control" required>
	                        </div>    

							
						</div>

                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <button type="reset" class="btn btn-danger">Limpar</button>
                            <a href="cadastro.php" class="btn btn-default">Cancelar</a>
                        </div>

                        <div class="clearfix"></div>

					</form>
				</div>
			</div> <!-- /.row -->
		</div>
	</div>
    
<?php include("../../fix/private-footer.php"); ?>

        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="../../assets/js/bootstrap.min.js"></script>

        <!-- Template main javascript -->
        <script src="../../assets/js/main.js"></script>

    </body>
</html>