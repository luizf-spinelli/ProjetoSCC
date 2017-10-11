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

        <!-- Busca CEP -->
        <script type='text/javascript'>
            $(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#CEP').blur(function(){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultar_cep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#CEP').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso > 0){
                        $('#RUA').val(data.rua);
                        $('#BRR').val(data.bairro);
                        $('#CID').val(data.cidade);
                        $('#EST').val(data.estado);
 
                        $('#PAS').focus();
                    }
                }
           });   
   return false;    
   })
});
        </script>
        
        
    </head>
    
<?php include("./fix/header.php"); ?>

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">PESSOA JURÍDICA <span class="title-under"></span></h1>
			<p class="page-description">
				Preencha os campos para realizar o cadastro de um novo cliente.
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

					<h2 class="title-style-2">CADASTRO<span class="title-under"></span></h2>

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
                                    <span class="contact-icon"><i class="fa fa-suitcase"></i></span> CNPJ:
                                    <input type="text" name="CNPJ" onkeydown="javascript: pjmascara( this, mcnpj );" value="<?= $cnpj ?>" maxlength="18" class="form-control mascara-cnpj" placeholder="">
	                        </div>
                                                                                                        
	                        <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-mobile-phone"></i></span> CEL:
                                    <input type="text" name="CEL" onkeydown="javascript: mascara( this, mtel );" value="<?= $cel ?>" maxlength="14" class="form-control mascara-telefone" placeholder="">
	                        </div>
                                                    
	                        <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-phone"></i></span> TEL:
                                     <input type="text" name="TEL" onkeydown="javascript: mascara( this, mtel );" value="<?= $tel ?>" maxlength="14" class="form-control mascara-telefone" placeholder="">
	                        </div>
                                                    
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-suitcase"></i></span> Razão Social:
                                     <input type="text" name="RSC" value="<?= $rsc ?>" maxlength="30" class="form-control" placeholder="">
	                        </div>                    
                                                    
                                <div class="form-group col-md-5">
                                    <span class="contact-icon"><i class="fa fa-envelope"></i></span> E-mail:
                                    <input type="email" name="EM" value="<?= $em ?>" maxlength="40" class="form-control" placeholder="Digite o email.">
	                        </div><!-- pattern="/^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}$/" -->
                                
                                <div class="col-md-12">
                                <h4 class="title-style-2">Endereço<span class="title-under"></span></h4>
                                </div>
                                 
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> CEP:
                                    <input type="text" name="CEP" onblur="" id="CEP" pattern="[0-9]{0,8}" value="<?= $cep ?>" maxlength="8" class="form-control" placeholder="">
	                        </div>                                    
                                                                                              
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> País:
                                    <input type="text" name="PAS" value="<?= $pas ?>" maxlength="30" class="form-control" placeholder="">
	                        </div>
                                
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Estado:
                                    <input type="text" name="EST" id="EST" value="<?= $est ?>" maxlength="2" class="form-control" placeholder="">
	                        </div>
                                
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Cidade:
                                    <input type="text" name="CID" id="CID" value="<?= $cid ?>" maxlength="30" class="form-control" placeholder="">
	                        </div>
                                
                                <div class="form-group col-md-6">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Rua:
                                    <input type="text" name="RUA" id="RUA" value="<?= $rua ?>" maxlength="50" class="form-control" placeholder="">
	                        </div>
                                
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Complemento:
                                     <input type="text" name="COM" value="<?= $com ?>" maxlength="30" class="form-control" placeholder="">
	                        </div>
                                
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-map-marker"></i></span> Bairro:
                                     <input type="text" name="BRR" id="BRR" value="<?= $brr ?>" maxlength="30" class="form-control" placeholder="">
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