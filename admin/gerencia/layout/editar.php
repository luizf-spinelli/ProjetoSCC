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
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <a style="text-decoration: underline" href="gerenciaH.php">Gerenciar</a> &raquo; 
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
                                                    <td style="text-align:center;"><input type="email" name="EM" value="<?= $em ?>" maxlength="40" class="form-control" placeholder=""/></td>
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
                                                  <th style="text-align:center;">Sexo</th>
                                                  <th style="text-align:center;">Nascimento</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="CPF" onkeydown="javascript: cpmascara( this, mcpf );" value="<?= $cpf ?>" maxlength="14" class="form-control mascara-cpf" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" name="RG" onkeydown="javascript: rmascara( this, mrg );" value="<?= $rg ?>" maxlength="12" class="form-control mascara-rg" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="1px" name="SX" pattern="(F|M)" value="<?= $sx ?>" maxlength="1" class="form-control" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="date" size="2px" name="NS" value="<?= $ns ?>" maxlength="12" class="form-control" placeholder=""/></td>
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
					          <th style="text-align:center;">Razão Social</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="CNPJ" onkeydown="javascript: pjmascara( this, mcnpj );" value="<?= $cnpj ?>" maxlength="18" class="form-control mascara-cnpj" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" name="RSC" value="<?= $rsc ?>" maxlength="30" class="form-control" placeholder=""/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                                    
                                            <div class="col-md-12">

					<h2 class="title-style-2">Endereço <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">País</th>
					          <th style="text-align:center;">Estado</th>
					          <th style="text-align:center;">Cidade</th>
					          <th style="text-align:center;">Bairro</th>
					          <th style="text-align:center;">CEP</th>
					          <th style="text-align:center;">Rua</th>
					          <th style="text-align:center;">Comp.</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" size="3px" name="PAS" value="<?= $pas ?>" maxlength="30" class="form-control" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="1px" name="EST" value="<?= $est ?>" maxlength="2" class="form-control" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="3px" name="CID" value="<?= $cid ?>" maxlength="30" class="form-control" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="3px" name="BRR" value="<?= $brr ?>" maxlength="30" class="form-control" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="2px" pattern="[0-9]{0,8}" name="CEP" value="<?= $cep ?>" maxlength="8" class="form-control" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="10px" name="RUA" value="<?= $rua ?>" maxlength="50" class="form-control" placeholder=""/></td>
                                                    <td style="text-align:center;"><input type="text" size="1px" name="COM" value="<?= $com ?>" maxlength="30" class="form-control" placeholder=""/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>        

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