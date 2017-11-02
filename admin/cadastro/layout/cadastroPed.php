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
			
			<h1 class="page-title">Cadastrar Pedido <span class="title-under"></span></h1>
			<p class="page-description">
				Preencha os campos para realizar o cadastro de um novo pedido.
			</p>			
		</div>
	</div>
    
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>                
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../cadastro.php">Cadastrar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="showPed.php">Cadastrar Pedido</a></b></p>
            </div>
    
	<div class="main-container fadeIn animated">

		<div class="container">
                    
			<div class="row">
                            
				<div class="col-md-10 col-sm-12 col-form">

					<h2 class="title-style-2">Pedido<span class="title-under"></span></h2>

                                        <form action="createPed.php" method="POST">

						<div class="row">

                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-asterisk"></i></span> <b>ID*:</b>
                                    <input type="text" name="IDCLIENTE" pattern="([0-9]{1,4})" value="<?= $idcliente ?>" maxlength="4" class="form-control" placeholder="" required readonly>
	                        </div>
                                                    
                                <div class="form-group col-md-6">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> <b>Nome*:</b>
                                    <input type="text" name="NM" value="<?= $nm ?>" maxlength="50" class="form-control" placeholder="Digite o nome." readonly>
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-asterisk"></i></span> <b>ID Pedido*:</b>
                                    <input type="text" name="IDPED" pattern="([0-9]{1,4})" value="<?= $idped ?>" maxlength="18" class="form-control" required>
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-plus"></i></span> <b>Quantidade:</b>
                                    <input type="text" name="QTD" pattern="([0-9]{0,4})" value="<?= $qtd ?>" maxlength="4" class="form-control">
	                        </div>                    
                                                                                                        
	                        <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-calendar"></i></span> <b>Data de solicitação:</b>
                                    <input type="date" name="SOL" value="<?= $sol ?>" maxlength="10" class="form-control">
	                        </div>
                                                    
	                        <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-calendar"></i></span> <b>Data de início:</b>
                                     <input type="date" name="INI" value="<?= $ini ?>" maxlength="10" class="form-control">
	                        </div>
                                                    
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-calendar"></i></span> <b>Prazo:</b>
                                     <input type="date" name="PRZ" value="<?= $prz ?>" maxlength="10" class="form-control">
	                        </div>  
                                
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-gear"></i></span> <b>Serviço Principal:</b><br/>
                                    <select name="SRV" class="form-control">                                        
                                        <option value="<?= $srv=''; ?>" class="form-control"></option>
                                        <option value="<?= $srv='1'; ?>" class="form-control">Costura</option>
                                        <option value="<?= $srv='2'; ?>" class="form-control">Confecção</option>
                                        <option value="<?= $srv='3'; ?>" class="form-control">Conserto</option>
                                        <option value="<?= $srv='4'; ?>" class="form-control">Bordado</option>                                     
                                    </select>
	                        </div>
                                                    
                                <div class="form-group col-md-8">
                                    <span class="contact-icon"><i class="fa fa-table"></i></span> <b>Observações:</b>
                                    <textarea type="text" name="OBV" rows="2" value="<?= $obv ?>" maxlength="100" class="form-control"></textarea>
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-check"></i></span> <b>Situação:</b>
                                    <p style="text-align: left; vertical-align: top"><input type="radio" style="vertical-align: top"  name="STP"  value="<?= $stp='Concluído'; ?>"  class="form-group"> Concluído<br/>
                                        <input type="radio" style="vertical-align: top" name="STP"  value="<?= $stp='Em aberto'; ?>"  class="form-group" checked> Em aberto</p>
	                        </div>                    
                                                    
                                <div class="col-md-12">
                                <h4 class="title-style-2">Pagamento<span class="title-under"></span></h4>
                                </div>
                                 
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-credit-card"></i></span> <b>Método:</b>
                                    <p style="text-align: left; vertical-align: top"><input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='À vista'; ?>"  class="form-group"> À vista<br/>
                                    <input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='Parcelado'; ?>"  class="form-group"> Parcelado<br/>
                                    <input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='Débito'; ?>"  class="form-group"> Débito<br/>
                                    <input type="radio" style="vertical-align: top"  name="MET"  value="<?= $met='Crédito'; ?>"  class="form-group"> Crédito<br/>
                                    <input type="radio" style="vertical-align: top" name="MET"  value="<?= $met='Outro'; ?>"  class="form-group" checked> Outro</p>
	                        </div>                                     
                                                                                              
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-money"></i></span> <b>Valor total:</b>
                                    <input type="text" name="VLR" pattern="([0-9]{0,5}.{0,1}[0-9]{0,2})" value="<?= $vlr ?>" maxlength="8" class="form-control" placeholder="00000.00">
	                        </div>
                                
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-check"></i></span> <b>Status:</b>
                                    <p style="text-align: left; vertical-align: top"><input type="radio" style="vertical-align: top"  name="STS"  value="<?= $sts='Pago'; ?>"  class="form-group" placeholder=""> Pago<br/>
                                        <input type="radio" style="vertical-align: top" name="STS"  value="<?= $sts='Não pago'; ?>"  class="form-group" checked> Não pago</p>
	                        </div> 
                                
                                <div class="form-group col-md-3">
                                    <span class="contact-icon"><i class="fa fa-calendar"></i></span> <b>Data de pagamento:</b>
                                    <input type="date" name="PAG" value="<?= $pag ?>" maxlength="10" class="form-control">
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
                            <a href="../cadastro.php" class="btn btn-default">Cancelar</a>
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