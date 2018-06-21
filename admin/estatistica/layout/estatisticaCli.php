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

        <!-- Template main Css -->
        <link rel="stylesheet" href="../../assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="../../assets/js/modernizr-2.6.2.min.js"></script>
        
        <script src="../../assets/js/Chart.bundle.js"></script>
	<script src="../../assets/js/utils.js"></script>
        
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
                                            <div class="col-md-12">
                                                <h2 class="title-style-2">Estatísticas <span class="title-under"></span></h2>
                                                <div role="tabpanel">

							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#med0" aria-controls="med0" role="tab" data-toggle="tab">Pessoa</a></li>
							    <li role="presentation"><a href="#med1" aria-controls="med1" role="tab" data-toggle="tab">Gênero</a></li>
							    <li role="presentation"><a href="#med2" aria-controls="med2" role="tab" data-toggle="tab">Faixa-etária</a></li>
							    <li role="presentation"><a href="#med3" aria-controls="med3" role="tab" data-toggle="tab">País</a></li>
							    <li role="presentation"><a href="#med4" aria-controls="med4" role="tab" data-toggle="tab">Estado</a></li>
							    <li role="presentation"><a href="#med5" aria-controls="med5" role="tab" data-toggle="tab">Cidade</a></li>
							  </ul>
                                                          
                                                          <div class="tab-content">
							    <div role="tabpanel" class="col-md-12 tab-pane active" id="med0">
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
                                                <div class="col-md-10 col-sm-12">                                               
<canvas id="chartjs-0" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                                                </div>
<script>new Chart(document.getElementById("chartjs-0"),
            {"type":"pie","data":{"labels":["Física","Jurídica"],
            "datasets":[{"label":"Pessoa",
                    "data":[
                    <?=$tcf?>,
                    <?=$tcj?>],
                    "backgroundColor":[window.chartColors.red,
                        window.chartColors.blue
                    ]}]}});
</script>
                                                          </div>
							    <div role="tabpanel" class="col-md-12 tab-pane" id="med1">                                                              
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
                                                <div class="col-md-10">                                               
<canvas id="chartjs-1" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                                                </div>
<script>new Chart(document.getElementById("chartjs-1"),
            {"type":"pie","data":{"labels":["Feminino","Masculino"],
            "datasets":[{"label":"Gênero",
                    "data":[
                    <?=$cff?>,
                    <?=$cfm?>],
                    "backgroundColor":[window.chartColors.red,
                        window.chartColors.blue
                    ]}]}});
</script>
                                                            </div>
							    <div role="tabpanel" class="col-md-12 tab-pane" id="med2">                                                    
                                            <div class="table-responsive col-md-12">                                                

					<h2 class="title-style-2">Faixa etária <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">Abaixo de 18 anos</th>
					          <th style="text-align:center;">18 - 25 anos</th>
					          <th style="text-align:center;">26 - 35 anos</th>
					          <th style="text-align:center;">36 - 45 anos</th>
					          <th style="text-align:center;">46 - 55 anos</th>
					          <th style="text-align:center;">56 - 65 anos</th>
					          <th style="text-align:center;">Acima de 65 anos</th>
					          <th style="text-align:center;">Total</th>
					        </tr>
					      </thead>
					      <tbody>
                                                  <td style='text-align:center;'><?= $fe0 . " (". number_format((($fe0/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $fe1 . " (". number_format((($fe1/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $fe2 . " (". number_format((($fe2/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $fe3 . " (". number_format((($fe3/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $fe4 . " (". number_format((($fe4/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $fe5 . " (". number_format((($fe5/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $fe6 . " (". number_format((($fe6/$tcf)*100),2) ."%)"; ?></td>
                                                  <td style='text-align:center;'><?= $tcf; ?></td>
					      </tbody>
					    </table>
                                            </div>
                                                <div class="col-md-10">                                               
<canvas id="chartjs-2" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                                                </div>
<script>new Chart(document.getElementById("chartjs-2"),
            {"type":"pie","data":{"labels":["<18","18-25","26-35","36-45","46-55","56-65",">65"],
            "datasets":[{"label":"Faixa etária",
                    "data":[
                    <?=$fe0?>,
                    <?=$fe1?>,
                    <?=$fe2?>,
                    <?=$fe3?>,
                    <?=$fe4?>,
                    <?=$fe5?>,
                    <?=$fe6?>],
                    "backgroundColor":[window.chartColors.red,
                        window.chartColors.blue,
                        window.chartColors.green,
                        window.chartColors.yellow,
                        window.chartColors.orange,
                        window.chartColors.purple,
                        window.chartColors.black
                    ]}]}});
</script>
                                                            </div>
							    <div role="tabpanel" class="col-md-12 tab-pane" id="med3">                                                              
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
                                                <div class="col-md-10">                                               
<canvas id="chartjs-3" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                                                </div>
<script>new Chart(document.getElementById("chartjs-3"),
            {"type":"pie","data":{"labels":["Brasil","Outros"],
            "datasets":[{"label":"País",
                    "data":[
                    <?=$pbr?>,
                    <?=$pbrm?>],
                    "backgroundColor":[window.chartColors.green,
                        window.chartColors.blue
                    ]}]}});
</script>
                                                            </div>
							    <div role="tabpanel" class="col-md-12 tab-pane" id="med4">                                                              
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
                                                <div class="col-md-10">                                               
<canvas id="chartjs-4" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                                                </div>
<script>new Chart(document.getElementById("chartjs-4"),
            {"type":"pie","data":{"labels":["SP","Outros"],
            "datasets":[{"label":"Estado",
                    "data":[
                    <?=$ufsp?>,
                    <?=$ufm?>],
                    "backgroundColor":[window.chartColors.red,
                        window.chartColors.blue
                    ]}]}});
</script>
                                                            </div>
							    <div role="tabpanel" class="col-md-12 tab-pane" id="med5">                                                              
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
                                                <div class="col-md-10">                                               
<canvas id="chartjs-6" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                                                </div>
<script>new Chart(document.getElementById("chartjs-6"),
            {"type":"pie","data":{"labels":["Santos","SV","PG","Guarujá","Cubatão","Outras"],
            "datasets":[{"label":"Cidade",
                    "data":[
                    <?=$ces?>,
                    <?=$cesv?>,
                    <?=$cepg?>,
                    <?=$ceg?>,
                    <?=$cec?>,
                    <?=$cem?>],
                    "backgroundColor":[window.chartColors.red,
                        window.chartColors.blue,
                        window.chartColors.green,
                        window.chartColors.yellow,
                        window.chartColors.orange,
                        window.chartColors.purple
                    ]}]}});
</script>
                                                            </div>
                                            </div>
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