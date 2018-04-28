<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Cliente</title>
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
			
			<h1 class="page-title">Estatísticas Clientes <span class="title-under"></span></h1>
			<p class="page-description">
				Analise as estatísticas relacionadas aos seus clientes.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../estatistica.php">Estatísticas</a> &raquo; 
                    <b><a style="text-decoration: underline" href="estCli.php">Clientes</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                            <div class="table-responsive col-md-6">

					<h2 class="title-style-2">Pessoa <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Física</th>
					          <th style="text-align:center;">Jurídica</th>
					          <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $tcf . " (". number_format((($tcf/$tc)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tcj . " (". number_format((($tcj/$tc)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tc; ?></td>
					      </tbody>
					    </table>
                                            </div>
                                                
                                                <div class="table-responsive col-md-6">

					<h2 class="title-style-2">Gênero <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Masculino</th>
					          <th style="text-align:center;">Feminino</th>
					          <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $cfm . " (". number_format((($cfm/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $cff . " (". number_format((($cff/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tcf; ?></td>
					      </tbody>
					    </table>
                                            </div>
                                            
                                            <div class="table-responsive col-md-6">

					<h2 class="title-style-2">País <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Brasil</th>
                                                  <th style="text-align:center;">Outros</th>
                                                  <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $pbr . " (". number_format((($pbr/$tpe)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $pbrm . " (". number_format((($pbrm/$tpe)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tpe; ?></td>
					      </tbody>
					    </table>
                                            </div>  
                                            
                                            <div class="table-responsive col-md-6">                                                
    

					<h2 class="title-style-2">Estado <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">São Paulo</th>
                                                  <th style="text-align:center;">Outros</th>
                                                  <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $ufsp . " (". number_format((($ufsp/$tee)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $ufm . " (". number_format((($ufm/$tee)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tee; ?></td>
					      </tbody>
					    </table>
                                            </div> 
                                                
                                            
                                            <div class="table-responsive col-md-12">                                                

					<h2 class="title-style-2">Cidade <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Santos</th>
					          <th style="text-align:center;">São Vicente</th>
					          <th style="text-align:center;">Praia Grande</th>
					          <th style="text-align:center;">Guarujá</th>
					          <th style="text-align:center;">Cubatão</th>
					          <th style="text-align:center;">Outras</th>
					          <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $ces . " (". number_format((($ces/$tce)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $cesv . " (". number_format((($cesv/$tce)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $cepg . " (". number_format((($cepg/$tce)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $ceg . " (". number_format((($ceg/$tce)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $cec . " (". number_format((($cec/$tce)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $cem . " (". number_format((($cem/$tce)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tce; ?></td>
					      </tbody>
					    </table>
                                            </div>

                                            </div><br/>
                                            <div class="col-md-12">
                                                <div class="container">
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <a href="../estatistica.php" class="btn btn-default">&larr; Voltar</a>
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