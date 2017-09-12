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
			
			<h1 class="page-title">Medidas de <?php echo $nm; ?> <span class="title-under"></span></h1>
			<p class="page-description">
				Preencha os campos em centímetros, usando ponto ao invés de vírgula.
			</p>			
		</div>
	</div>
    
            <div class="container">
            <div class="row">
<?php include("./fix/welcome.php"); ?>                
            </div>
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <a style="text-decoration: underline" href="cadastroH.php">Cadastrar</a> &raquo; 
                    <a style="text-decoration: underline" href="showmed.php">Cadastrar Medidas</a> &raquo; <b><a style="text-decoration: underline" href="showmed.php">Medidas de <?php echo $nm; ?></a></b></p>
            </div>
    
	<div class="main-container fadeIn animated">

		<div class="container">
                    
			<div class="row">
                            
				<div class="col-md-12 col-sm-12 col-form">

					<h2 class="title-style-2">CADASTRO DE MEDIDAS<span class="title-under"></span></h2>

                                        <form action="createmed.php" method="post">

						<div class="row">

                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-asterisk"></i></span> ID*:
                                    <input type="text" name="IDCLIENTE" pattern="([0-9]{1,4})" value="<?= $idcliente ?>" maxlength="4" class="form-control" placeholder="" readonly>
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Ombro a Ombro:
	                            <input type="text" name="OAO" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $oao ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Ombro:
	                            <input type="text" name="OMB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $omb ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Colarinho:
	                            <input type="text" name="COL" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $col ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>                    

				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Cavas Frente:
	                            <input type="text" name="CVF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cvf ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Centro Frente:
	                            <input type="text" name="CTF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $ctf ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Cavas Costas:
	                            <input type="text" name="CVC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cvc ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Busto:
	                            <input type="text" name="BST" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $bst ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. do Busto:
	                            <input type="text" name="ATB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atb ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Sep. do Busto:
	                            <input type="text" name="SPB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $spb ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Cintura:
	                            <input type="text" name="CIN" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cin ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Quadril:
	                            <input type="text" name="QDR" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $qdr ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. do Quadril:
	                            <input type="text" name="ATQ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atq ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>                    

				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. Gancho Frente:
	                            <input type="text" name="AGF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $agf ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. Gancho Costa:
	                            <input type="text" name="AGC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $agc ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Cintura ao Joelho:
	                            <input type="text" name="CAJ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $caj ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Cintura ao Tornozelo:
	                            <input type="text" name="CAT" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cat ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Largura do Joelho:
	                            <input type="text" name="LGJ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $lgj ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Boca da Calça:
	                            <input type="text" name="BCC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $bcc ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Compr. do Braço:
	                            <input type="text" name="CPB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cpb ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Largura do Braço:
	                            <input type="text" name="LGB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $lgb ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Punho:
	                            <input type="text" name="PNH" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $pnh ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>	                                                    
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. Manga 3/4:
	                            <input type="text" name="AMT" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $amt ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. Manga Curta:
	                            <input type="text" name="ATM" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atm ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
                                <div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. da Saia:
	                            <input type="text" name="ATS" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $ats ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>                    

				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. Frente:
	                            <input type="text" name="ATF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atf ?>" maxlength="7" class="form-control" placeholder="000.00">
	                        </div>
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-user"></i></span> Alt. Costas:
	                            <input type="text" name="ATC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atc ?>" maxlength="7" class="form-control" placeholder="000.00">
                                </div> 
                                                    
				<div class="form-group col-md-2">
                                    <span class="contact-icon"><i class="fa fa-asterisk"></i></span> ID MEDIDA*:
	                            <input type="text" name="IDMEDIDA" pattern="([0-9]{1,4})" value="<?= $idmedida ?>" maxlength="4" class="form-control" placeholder="" required>
	                        </div>   
                                
                                <div class="form-group col-md-4">
                                    <span class="contact-icon"><i class="fa fa-table"></i></span> Observações:
                                    <textarea type="text" name="OBS" rows="2" value="<?= $obs ?>" maxlength="100" class="form-control" placeholder=""></textarea>
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
                            <a href="showmed.php" class="btn btn-default">Cancelar</a>
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