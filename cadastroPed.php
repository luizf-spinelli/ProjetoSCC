<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
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
			
			<h1 class="page-title">Cadastrar Pedido <span class="title-under"></span></h1>
			<p class="page-description">
				Preencha os campos para realizar o cadastro de um novo pedido.
			</p>			
		</div>
	</div>
    
            <div class="container">
            <div class="row">
<?php include("./fix/welcome.php"); ?>                
            </div>
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <a style="text-decoration: underline" href="cadastroH.php">Cadastrar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="createJ.php">Pessoa Jurídica</a></b></p>
            </div>
    
	<div class="main-container fadeIn animated">

		<div class="container">
                    
			<div class="row">
                            
				<div class="col-md-10 col-sm-12 col-form">

					<h2 class="title-style-2">Pedido<span class="title-under"></span></h2>

                                        <form action="createJ.php" method="post">

						<div class="row">

                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-asterisk"></i></span> ID*:
                                    <input type="text" name="IDCLIENTE" pattern="([0-9]{1,4})" value="<?= $idcliente ?>" maxlength="4" class="form-control" placeholder="" required>
	                        </div>
                                                    
                                <div class="form-group col-md-6">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Nome*:
	                            <input type="text" name="NM" value="<?= $nm ?>" maxlength="50" class="form-control" placeholder="Digite o nome." required>
	                        </div>
                                                    
                                <div class="form-group col-md-4">
                                    <span class="contact-icon"><i class="fa fa-suitcase"></i></span> ID Pedido*:
                                    <input type="text" name="CNPJ" pattern="([0-9]{1,4})" value="<?= $cnpj ?>" maxlength="18" class="form-control" placeholder="" required>
	                        </div>
                                                                                                        
	                        <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-mobile-phone"></i></span> Data de solicitação:
                                    <input type="date" name="CEL" value="<?= $cel ?>" maxlength="14" class="form-control" placeholder="">
	                        </div>
                                                    
	                        <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-phone"></i></span> Data de início:
                                     <input type="date" name="TEL" value="<?= $tel ?>" maxlength="14" class="form-control" placeholder="">
	                        </div>
                                                    
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-suitcase"></i></span> Data de finalização:
                                     <input type="date" name="RSC" value="<?= $rsc ?>" maxlength="30" class="form-control" placeholder="">
	                        </div>                    
                                                    
                                <div class="form-group col-md-5">
                                    <span class="contact-icon"><i class="fa fa-envelope"></i></span> Quantidade:
                                    <input type="email" name="EM" pattern="([0-9]{1,4})" value="<?= $em ?>" maxlength="40" class="form-control" placeholder="">
	                        </div>
                                
                                <div class="form-group col-md-6">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Serviço:<br/>
                                    <select>                                        
                                        <option name="IDSERV" value="<?= $idserv='null'; ?>" class="form-control"></option>
                                        <option name="IDSERV" value="<?= $idserv='1'; ?>" class="form-control">Costura</option>
                                        <option name="IDSERV" value="<?= $idserv='2'; ?>" class="form-control">Confecção</option>
                                        <option name="IDSERV" value="<?= $idserv='3'; ?>" class="form-control">Conserto</option>
                                        <option name="IDSERV" value="<?= $idserv='4'; ?>" class="form-control">Bordado</option>                                     
                                    </select>
	                        </div>
                                                    
                                <div class="col-md-12">
                                <h4 class="title-style-2">Pagamento<span class="title-under"></span></h4>
                                </div>
                                 
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-male"></i></span> Método:
                                    <p style="text-align: left; vertical-align: top"><input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='Dinheiro'; ?>"  class="form-group" placeholder=""> Dinheiro<br/>
                                    <input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='Parcelado'; ?>"  class="form-group" placeholder=""> Parcelado<br/>
                                    <input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='Débito'; ?>"  class="form-group" placeholder=""> Débito<br/>
                                    <input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='Crédito'; ?>"  class="form-group" placeholder=""> Crédito<br/>
                                    <input type="radio" style="vertical-align: top" name="MET"  value="<?= $met='Outro'; ?>"  class="form-group" placeholder=""> Outro</p>
	                        </div>                                     
                                                                                              
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Valor total:
                                    <input type="text" name="PAS" value="<?= $pas ?>" maxlength="30" class="form-control" placeholder="">
	                        </div>
                                
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-male"></i></span> Status:
                                    <p style="text-align: left; vertical-align: top"><input type="radio" style="vertical-align: top"  name="SX"  value="<?= $sx='M'; ?>"  class="form-group" placeholder=""> Pago<br/>
                                        <input type="radio" style="vertical-align: top" name="SX"  value="<?= $sx='F'; ?>"  class="form-group" placeholder="" checked=""> Não pago</p>
	                        </div> 
                                
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Data de pagamento:
                                    <input type="date" name="CID" id="CID" value="<?= $cid ?>" maxlength="30" class="form-control" placeholder="">
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
                            <a href="cadastroH.php" class="btn btn-default">Cancelar</a>
                        </div>

                        <div class="clearfix"></div>

					</form>
				</div>
			</div> <!-- /.row -->
		</div>
	</div>
    
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