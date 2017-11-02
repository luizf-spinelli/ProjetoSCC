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
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        
        <!-- Ordenar Tabela JS -->
        <script src="assets/js/sorttable.js"></script>
        
<?php include("./fix/header.php"); ?>
    
    <body>
        <div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Gerenciar Clientes <span class="title-under"></span></h1>
			<p class="page-description">
				Listados abaixo, todos os clientes cadastrados.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("./fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <a style="text-decoration: underline" href="gerenciaH.php">Gerenciar</a> &raquo;
                <b><a style="text-decoration: underline" href="show.php">Clientes</a></b></p>
            </div>
                                    <div class="main-container">
                                        <div class="container">
                                            <div class="col-md-12">

					<h2 class="title-style-2">Clientes <span class="title-under"></span></h2>
                                        
                                        <div class="input-group">
                                            <input type="text" placeholder="Busca pelo nome" id="txtnome" onkeyup="getDados();">
                                        </div><br/>
                                        
                                        <div id="resultado">
						<table class="table table-style-1 sortable">
                                                    <thead>                                                  
					          <th style="text-align:center;">ID</th>
                                                  <th style="text-align:center;">Nome</th>
                                                  <th style="text-align:center;">Ver</th>
                                                  <th style="text-align:center;">Relatório</th>
                                                  <th style="text-align:center;">Editar</th>
                                                  <th style="text-align:center;">Excluir</th>
                                                    </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dados as $i=>$v) {
                                                        echo "<tr>";
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<td style='text-align:center;'>$v2</td>";
                                                        }
                                                        echo "<td style='text-align:center;'><a  class='btn btn-info' href='details.php?idcliente={$v[0]}'><i class='fa fa-user'></i></a></td>";
                                                        echo "<td style='text-align:center;'><a target='_blank' class='btn btn-default' href='pdf.php?idcliente={$v[0]}'><i class='fa fa-file-pdf-o'></i></a></td>";
                                                        echo "<td style='text-align:center;'><a  class='btn btn-success' href='edit.php?idcliente={$v[0]}'><i class='fa fa-pencil-square-o'></i></a></td>";
                                                        echo "<td style='text-align:center;'><a  class='btn btn-danger' href='deleteF.php?idcliente={$v[0]}&nm={$v[1]}'><i class='fa fa-remove'></i></a></td>";                                                        
                                                      }
                                                    ?>
					      </tbody>
					    </table>
                                        </div>
                                            </div>
                                        </div> 
                                    </div><br/><br/>
        
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
        
        <!-- Busca -->
        <script type="text/javascript" src="assets/js/ajax.js"></script>

    </body>
</html>
