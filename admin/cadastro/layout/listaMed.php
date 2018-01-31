<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Lista</title>
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
        
        <!-- Ordenar Tabela JS -->
        <script src="../../assets/js/sorttable.js"></script>
        
<?php include("../../fix/header.php"); ?>
    
    <body>
        <div id="topo" class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Cadastrar Medidas <span class="title-under"></span></h1>
			<p class="page-description">
				Listados abaixo, estão todos os clientes cadastrados para add medidas.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../cadastro.php">Cadastrar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="showMed.php">Medidas</a></b></p>
            </div>
                                    <div class="main-container">
                                        <div class="container">
                                            <div class="col-md-12">

					<h2 class="title-style-2">Clientes <span class="title-under"></span></h2>
                                        
                                        <div class="input-group">
                                            <input type="text" placeholder="Busca pelo nome" id="txtnome" onkeyup="getDadoss();">
                                        </div><br/>
                                        
                                        <div id="resultado">
						<table class="table table-style-1 sortable">
                                                    <thead>                                                  
					          <th style="text-align:center;">ID</th>
                                                  <th style="text-align:center;">Nome</th>
                                                  <th style="text-align:center;">Medidas</th>				        
                                                    </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dados as $i=>$v) {
                                                        echo "<tr>";
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<td style='text-align:center;'>$v2</td>";
                                                        }
                                                        echo "<td style='text-align:center;'><a  class='btn btn-success' href='createMed.php?idcliente={$v[0]}&nm={$v[1]}'>+ Medida</td>";
                                                      }
                                                    ?>
					      </tbody>
					    </table>
                                        </div><br/>
                                        <div class="form-group">
                                            <a href="../cadastro.php" class="btn btn-default">&larr; Voltar</a>
                                            <a href="#topo" class="btn btn-default">&uarr; Topo</a>
                                        </div>                                        
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
        
        <!-- Busca -->
        <script type="text/javascript" src="../../assets/js/ajax_1.js"></script>

    </body>
</html>