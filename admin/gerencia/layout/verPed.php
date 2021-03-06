<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Ver</title>
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
			
			<h1 class="page-title"><?php echo $nm; ?> <span class="title-under"></span></h1>
			<p class="page-description">
				Listado abaixo, o pedido selecionado.
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

					<h2 class="title-style-2">Cliente <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">Nome</th>
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadoscli as $i=>$v) {
                                                        echo "<tr>";
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<td style='text-align:center;'>$v2</td>";
                                                        }
                                                        echo "<tr>";
                                                      }
                                                    ?>
					      </tbody>
					    </table>
                                            </div>

                                            <div class="col-md-12 col-sm-12">

					<h2 class="title-style-2">Pedido <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">N° Pedido</th>                                                  
                                                  <th style="text-align:center;">Data de início</th>
                                                  <th style="text-align:center;">Data de solicitação</th>
                                                  <th style="text-align:center;">Prazo</th>
                                                  <th style="text-align:center;">Qtde.</th>
                                                  <th style="text-align:center;">Situação</th>
                                                  <th style="text-align:center;">Observações</th>                                              
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadosped as $i=>$v) {
                                                        echo "<tr>";
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<td style='text-align:center;'>$v2</td>";
                                                        }
                                                        echo "<tr>";
                                                      }
                                                    ?>
					      </tbody>
					    </table>
                                            </div>
                                            <div class="col-md-12">
                                        
                                        <h2 class="title-style-2">Pagamento <span class="title-under"></span></h2>        
						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
                                                  <th style="text-align:center;">Método</th>
                                                  <th style="text-align:center;">Data de pagamento</th>
                                                  <th style="text-align:center;">Valor(R$)</th>
                                                  <th style="text-align:center;">Status</th>
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadospag as $i=>$v) {
                                                        echo "<tr>";
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<td style='text-align:center;'>$v2</td>";
                                                        }
                                                        echo "<tr>";
                                                      }
                                                    ?>
					      </tbody>
					    </table>
                                            </div>                                                
                                            </div><br/>
                                            <div class="col-md-12">
                                                <div class="container">
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <a href="managePed.php" class="btn btn-default">&larr; Voltar</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div><br/>
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