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
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="../../assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="../../assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="../../assets/js/modernizr-2.6.2.min.js"></script>

<?php include("../../fix/header.php"); ?>
    
    <body>
        <div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Editar Serviço <span class="title-under"></span></h1>
			<p class="page-description">
				Listados abaixo, todos os dados relacionados ao serviço selecionado.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../gerencia.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="manageServ.php">Serviço</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                                <form action="editServ.php" method="POST">
                                            <div class="col-md-6">

					<h2 class="title-style-2">Serviço <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">Tipo</th>
					          <th style="text-align:center;">Valor Base(R$)</th>
					          <th style="text-align:center;">Duração(dias)</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="IDSERV" pattern="([0-9]{1,4})" size="2px" value="<?= $idserv ?>" maxlength="4" class="form-control" placeholder="" readonly required/></td>
                                                    <td style="text-align:center;"><input type="text" name="TP" value="<?= $tp ?>" maxlength="20" class="form-control" placeholder="" required/></td>
                                                    <td style="text-align:center;"><input type="text" name="VLB" value="<?= $vlb ?>" maxlength="8" class="form-control" placeholder="" required/></td>
                                                    <td style="text-align:center;"><input type="text" name="DUR" value="<?= $dur ?>" maxlength="8" class="form-control" placeholder="" required/></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>       

                        <div class="col-md-12 form-group">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="editServ.php?idserv=<?= $idserv ?>" class="btn btn-danger">Desfazer</a> 
                                    <a href="manageServ.php" class="btn btn-default">Cancelar</a>
                        </div>
                                                </form>                                                    
                                            </div>
        </div>
        
<?php include("../../fix/private-footer.php"); ?> 
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="../../assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="../../assets/js/jquery.prettyPhoto.js"></script>

        <!-- Template main javascript -->
        <script src="../../assets/js/main.js"></script>

    </body>
</html>