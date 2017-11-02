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
			
			<h1 class="page-title">Editar Pedido<span class="title-under"></span></h1>
			<p class="page-description">
				Listado abaixo, o pedido a ser editado.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("./fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <a style="text-decoration: underline" href="gerenciaH.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="managePed.php">Pedidos</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                                <form action="editPed.php" method="POST">
                                            <div class="col-md-6">

					<h2 class="title-style-2">Cliente <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">N° Pedido</th>
					          <th style="text-align:center;">Nome</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="IDPEDIDO" pattern="([0-9]{1,4})" size="1px" value="<?= $idpedido ?>" maxlength="4" class="form-control" placeholder="" readonly required/></td>
                                                    <td style="text-align:center;"><input type="text" name="NM" size="5px" value="<?= $nm ?>" maxlength="50" class="form-control" placeholder="" readonly/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                                    
                                            <div class="col-md-12">

					<h2 class="title-style-2">Pedido <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Quantidade</th>
					          <th style="text-align:center;">Data Solicitação</th>
					          <th style="text-align:center;">Data Início</th>
					          <th style="text-align:center;">Prazo</th>
					          <th style="text-align:center;">Serviço Principal</th>
					          <th style="text-align:center;">Situação</th>
					          <th style="text-align:center;">Observações</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="QTD" pattern="([0-9]{0,4})" value="<?= $qtd ?>" maxlength="4" class="form-control"></td>
                                                    <td style="text-align:center;"><input type="date" name="SOL" value="<?= $sol ?>" maxlength="10" class="form-control"></td>
                                                    <td style="text-align:center;"><input type="date" name="INI" value="<?= $ini ?>" maxlength="10" class="form-control"></td>
                                                    <td style="text-align:center;"><input type="date" name="PRZ" value="<?= $prz ?>" maxlength="10" class="form-control"></td>
                                                    <td style="text-align:center;"><input type="text" name="SRV" value="<?= $srv ?>" class="form-control"></td>                                                    
                                                    <td style="text-align:center;"><input type="text" name="STP" value="<?= $stp ?>"  class="form-control"></td>
                                                    <td style="text-align:center;"><input type="text" name="OBV" value="<?= $obv ?>" maxlength="100" class="form-control"></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                                    
                                            <div class="col-md-12">

					<h2 class="title-style-2">Pedido <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Método</th>
					          <th style="text-align:center;">Valor(R$)</th>
					          <th style="text-align:center;">Status</th>
					          <th style="text-align:center;">Data Pagamento</th>					          
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                  <td style="text-align:center;"><input type="text" name="MET"  value="<?= $met ?>"  class="form-control"></td>
                                                  <td style="text-align:center;"><input type="text" name="VLR" pattern="([0-9]{0,5}.{0,1}[0-9]{0,2})" value="<?= $vlr ?>" maxlength="8" class="form-control"></td>
                                                  <td style="text-align:center;"><input type="text" name="STS"  value="<?= $sts ?>"  class="form-control"></td>
                                                  <td style="text-align:center;"><input type="date" name="PAG" value="<?= $pag ?>" maxlength="10" class="form-control"></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>
                                                    
                        <div class=" col-md-6 form-group">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="editPed.php?idpedido=<?= $idpedido ?>&idcliente=<?= $idcliente ?>" class="btn btn-danger">Desfazer</a> 
                                    <a href="managePed.php" class="btn btn-default">Cancelar</a>
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