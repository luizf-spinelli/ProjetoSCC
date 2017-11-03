<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Excluir</title>
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
        <script type="text/javascript">
            function envio(){
if (confirm('Tem certeza que deseja excluir o pedido selecionado?')) {
	return true;
} else {
	return false;
}
            }
        </script>
    </head>
            
            <?php include("../../fix/header.php"); ?>
    
    <body>
        <div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Excluir Pedido <span class="title-under"></span></h1>
			<p class="page-description">
				Deseja mesmo apagar o pedido selecionado?
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../gerencia.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="managePed.php">Pedidos</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container"> 
                                            <div class="col-md-6">
                                                <form action="deletePed.php" method="post">
					<h2 class="title-style-2">Excluir pedido? <span class="title-under"></span></h2>

						<table class="table table-style-1">
					      <thead>
					        <tr>
					          <th style="text-align:center;">N° Pedido</th>
					          <th style="text-align:center;">ID Cliente</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                        <td style="text-align:center;"><input style="text-align:center;" type="text" name="IDPEDIDO" value="<?= $idpedido ?>" readonly></td>
                        <td style="text-align:center;"><input style="text-align:center;" type="text" name="IDCLIENTE" value="<?= $idcliente ?>" readonly></td>
                        </tr>
                        </tbody>
                        </table>                        
                                        <input type="submit" class="btn btn-danger pull-left" value="Excluir" oncLick="return envio();">
			<a href="managePed.php" class="btn btn-default pull-right">Cancelar</a>
                                                </form>
                                            </div>
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