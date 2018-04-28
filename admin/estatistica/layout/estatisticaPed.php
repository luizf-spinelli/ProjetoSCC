<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Pedido</title>
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
			
			<h1 class="page-title">Estatísticas Pedidos <span class="title-under"></span></h1>
			<p class="page-description">
				Analise as estatísticas relacionadas aos seus pedidos.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../estatistica.php">Estatísticas</a> &raquo; 
                    <b><a style="text-decoration: underline" href="estPed.php">Pedidos</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                            <div class="table-responsive col-md-12">

					<h2 class="title-style-2">Tipos <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Costura</th>
					          <th style="text-align:center;">Confecção</th>
					          <th style="text-align:center;">Conserto</th>
					          <th style="text-align:center;">Bordado</th>
					          <th style="text-align:center;">Treinamento</th>
					          <th style="text-align:center;">Não definido</th>
					          <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $cost . " (". number_format((($cost/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $conf . " (". number_format((($conf/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $cons . " (". number_format((($cons/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $bord . " (". number_format((($bord/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $trn . " (". number_format((($trn/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $nll . " (". number_format((($nll/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tserv; ?></td>
					      </tbody>
					    </table>
                                            </div>
                                                
                                                <div class="table-responsive col-md-6">

					<h2 class="title-style-2">Pedidos <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Em aberto</th>
					          <th style="text-align:center;">Concluído</th>
					          <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $eab . " (". number_format((($eab/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $ccd . " (". number_format((($ccd/$tserv)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tserv; ?></td>
					      </tbody>
					    </table>
                                            </div>
                                            
                                            <div class="table-responsive col-md-6">

					<h2 class="title-style-2">Pagamentos <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Pendente</th>
                                                  <th style="text-align:center;">Pago</th>
                                                  <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $pend . " (". number_format((($pend/$tpag)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $pago . " (". number_format((($pago/$tpag)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tpag; ?></td>
					      </tbody>
					    </table>
                                            </div>  
                                            
                                            <div class="table-responsive col-md-12">                                                
    

					<h2 class="title-style-2">Valores <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Abaixo de R$100,00</th>
                                                  <th style="text-align:center;">R$100,01 - R$200,00</th>
                                                  <th style="text-align:center;">R$200,01 - R$500,00</th>
                                                  <th style="text-align:center;">R$500,01 - R$1.000,00</th>
                                                  <th style="text-align:center;">Acima de R$1.000,00</th>
                                                  <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $cem . " (". number_format((($cem/$tval)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $duz . " (". number_format((($duz/$tval)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $qui . " (". number_format((($qui/$tval)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $mil . " (". number_format((($mil/$tval)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $inf . " (". number_format((($inf/$tval)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tval; ?></td>
					      </tbody>
					    </table>
                                            </div>
                                                
                                            <div class="table-responsive col-md-12">                                                
    

					<h2 class="title-style-2">Métodos <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">À vista</th>
                                                  <th style="text-align:center;">Parcelado</th>
                                                  <th style="text-align:center;">Débito</th>
                                                  <th style="text-align:center;">Crédito</th>
                                                  <th style="text-align:center;">Outros</th>
                                                  <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $vst . " (". number_format((($vst/$tpag)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $par . " (". number_format((($par/$tpag)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $deb . " (". number_format((($deb/$tpag)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $crd . " (". number_format((($crd/$tpag)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $otr . " (". number_format((($otr/$tpag)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tpag; ?></td>
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