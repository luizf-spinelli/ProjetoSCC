<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Editar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

<?php include("./fix/header.php"); ?>
    
    <body>
        <div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Editar <?php echo $nm; ?> <span class="title-under"></span></h1>
			<p class="page-description">
				Listados abaixo, todos os dados relacionados ao cliente selecionado.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("./fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <a style="text-decoration: underline" href="show.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="show.php">Editar <?php echo $nm; ?></a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                                <form action="edit.php" method="POST">
                                            <div class="col-md-6">

					<h2 class="title-style-2">Cliente <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">Nome</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="IDCLIENTE" pattern="([0-9]{1,4})" size="1px" value="<?= $idcliente ?>" maxlength="4" class="form-control" placeholder="" readonly required/></td>
                                                    <td style="text-align:center;"><input type="text" name="NM" size="5px" value="<?= $nm ?>" maxlength="50" class="form-control" placeholder="" required/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                            
                                            <div class="col-md-6">

					<h2 class="title-style-2">Contato <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Telefone</th>
                                                  <th style="text-align:center;">Celular</th>
                                                  <th style="text-align:center;">E-mail</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" size="6px" name="TEL" onkeydown="javascript: mascara( this, mtel );" value="<?= $tel ?>" maxlength="14" class="form-control mascara-telefone" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="7px" name="CEL" onkeydown="javascript: mascara( this, mtel );" value="<?= $cel ?>" maxlength="14" class="form-control mascara-telefone" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" name="EM" value="<?= $em ?>" maxlength="40" class="form-control" placeholder=""/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>  
                                            
                                            <div class="col-md-6">

					<h2 class="title-style-2">Pessoa Física <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">CPF</th>
                                                  <th style="text-align:center;">RG</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="CPF" onkeydown="javascript: cpmascara( this, mcpf );" value="<?= $cpf ?>" maxlength="14" class="form-control mascara-cpf" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" name="RG" onkeydown="javascript: rmascara( this, mrg );" value="<?= $rg ?>" maxlength="12" class="form-control mascara-rg" placeholder=""/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                            
                                            <div class="col-md-6">

					<h2 class="title-style-2">Pessoa Jurídica <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">CNPJ</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="CNPJ" onkeydown="javascript: pjmascara( this, mcnpj );" value="<?= $cnpj ?>" maxlength="18" class="form-control mascara-cnpj" placeholder=""/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                            <!--<div class="col-md-12">

					<h2 class="title-style-2">Medidas <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID MED</th>
                                                  <th style="text-align:center;">Ombro a Ombro</th>
                                                  <th style="text-align:center;">Ombro</th>
                                                  <th style="text-align:center;">Colarinho</th>
                                                  <th style="text-align:center;">Cavas Frente</th>
                                                  <th style="text-align:center;">Centro Frente</th>
                                                  <th style="text-align:center;">Cavas Costas</th>
                                                  <th style="text-align:center;">Busto</th>
                                                  <th style="text-align:center;">Alt. Busto</th>                                                 
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="IDMEDIDA" pattern="([0-9]{1,4})" value="<?= $idmedida ?>" maxlength="4" class="form-control" placeholder="" required></td>
                                                    <td style="text-align:center;"><input type="text" name="OAO" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $oao ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="OMB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $omb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="COL" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $col ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="CVF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cvf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="CTF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $ctf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="CVC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cvc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="BST" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $bst ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="ATB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                            <div class="col-md-12">

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
                                                  <th style="text-align:center;">Seperação Busto</th>
                                                  <th style="text-align:center;">Cintura</th>
                                                  <th style="text-align:center;">Quadril</th>
                                                  <th style="text-align:center;">Alt. Quadril</th>
                                                  <th style="text-align:center;">Alt. Gancho Frente</th> 
                                                  <th style="text-align:center;">Alt. Gancho Costas</th>
                                                  <th style="text-align:center;">Cintura ao Joelho</th>
                                                  <th style="text-align:center;">Cintura ao Tornozelo</th>
                                                  <th style="text-align:center;">Larg. Joelho</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="SPB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $spb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="CIN" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cin ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="QDR" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $qdr ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="ATQ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atq ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="AGF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $agf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="AGC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $agc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="CAJ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $caj ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="CAT" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cat ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="LGJ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $lgj ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                            <div class="col-md-12">

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
                                                  <th style="text-align:center;">Boca da Calça</th>
                                                  <th style="text-align:center;">Compr. Braço</th>
                                                  <th style="text-align:center;">Larg. Braço</th>
                                                  <th style="text-align:center;">Punho</th>
                                                  <th style="text-align:center;">Alt. Manga 3/4</th>
                                                  <th style="text-align:center;">Alt. Manga Curta</th>
                                                  <th style="text-align:center;">Alt. Saia</th>
                                                  <th style="text-align:center;">Alt. Frente</th>
                                                  <th style="text-align:center;">Alt. Costas</th>                                                
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="BCC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $bcc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="CPB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cpb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="LGB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $lgb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="PNH" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $pnh ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="AMT" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $amt ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="ATM" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atm ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="ATS" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $ats ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="ATF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                    <td style="text-align:center;"><input type="text" name="ATC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>-->
                        <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="edit.php?idcliente=<?= $idcliente ?>" class="btn btn-danger">Desfazer</a> 
                                    <a href="show.php" class="btn btn-default">Cancelar</a>
                        </div>
                                                </form>                                                    
                                            </div>
        </div>
        
<?php include("./fix/private-footer.php"); ?> 
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>

        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

    </body>
</html>