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
			
			<h1 class="page-title">Editar Máquina <span class="title-under"></span></h1>
			<p class="page-description">
				Listados abaixo, todos os dados relacionados à máquina selecionada.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../gerencia.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="manageMaq.php">Máquina</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                                <form action="editMaq.php" method="POST">
                                            <div class="col-md-6">

					<h2 class="title-style-2">Máquina <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">Tipo</th>
					          <th style="text-align:center;">Modelo</th>
					          <th style="text-align:center;">Última manutenção</th>
					          <th style="text-align:center;">Penúltima manutenção</th>
					        </tr>
					      </thead>
					      <tbody>
                                                <tr>
                                                    <td style="text-align:center;"><input type="text" name="IDMAQ" pattern="([0-9]{1,4})" size="4px" value="<?= $idmaq ?>" maxlength="4" class="form-control" readonly required/></td>
                                                    <td style="text-align:center;"><input type="text" name="TIP" value="<?= $tip ?>" maxlength="30" class="form-control" required/></td>
                                                    <td style="text-align:center;"><input type="text" name="MOD" value="<?= $mod ?>" maxlength="50" class="form-control" required/></td>
                                                    <td style="text-align:center;"><input type="date" name="DTM" value="<?= $dtm ?>" maxlength="10" class="form-control"></td>
                                                    <td style="text-align:center;"><input type="date" name="PNM" value="<?= $pnm ?>" maxlength="10" class="form-control"></td>
                                                </tr>
					      </tbody>
					    </table>
                                            </div>       

                        <div class="col-md-12 form-group">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="editMaq.php?idmaq=<?= $idmaq ?>" class="btn btn-danger">Desfazer</a> 
                                    <a href="manageMaq.php" class="btn btn-default">Cancelar</a>
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