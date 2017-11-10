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
				<?php echo $obs; ?>
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../gerencia.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="manageMed.php">Gerenciar Medidas</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                                <div class="col-md-10">
                                                <h2 class="title-style-2">Ficha de medidas <span class="title-under"></span></h2>
                                                <div role="tabpanel">

							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#med0" aria-controls="med0" role="tab" data-toggle="tab">Geral</a></li>
							    <li role="presentation"><a href="#med1" aria-controls="med1" role="tab" data-toggle="tab">Cabeça ao tórax</a></li>
							    <li role="presentation"><a href="#med2" aria-controls="med2" role="tab" data-toggle="tab">Tórax à Cintura</a></li>
							    <li role="presentation"><a href="#med3" aria-controls="med3" role="tab" data-toggle="tab">Cintura aos pés</a></li>
							  </ul>

							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="col-md-12 tab-pane active" id="med0">

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID cliente</th>
					          <th style="text-align:center;">Cliente</th>
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
                                                
                                            <table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
                                                  <th style="text-align:center;">ID Medida</th>                                          
                                                  <th style="text-align:center;">Descrição</th>                                          
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadosobs as $i=>$v) {
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
							    <div role="tabpanel" class="tab-pane" id="med1">
                                                                <div class="col-md-3">
                                                                    <img src="../../assets/images/med1.png" alt="">
                                                                </div>
                                                                <div class="col-md-3">
                                            <table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>                                                  
                                                  <th style="text-align:center;">Ombro a Ombro</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Ombro</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Colarinho</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Busto</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura do Busto</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Separação do Busto</th>
                                                  </tr>				        
					      </thead>
                                            </table>
                                                                </div>
                                                                <div class="col-md-2">
                                            <table class="table table-style-1 table-bordered">
                                                    <?php
                                                      foreach($dadosmeda as $i=>$v) {                                                        
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<tr><td style='text-align:center;'>$v2 cm</td></tr>";
                                                        }                                                        
                                                      }
                                                    ?>
					    </table>
                                                                </div>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="med3">
                                                                <div class="col-md-3">
                                                                    <img src="../../assets/images/med3.png" alt="">
                                                                </div>
                                                                <div class="col-md-3">
                                            <table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>                                                  
                                                  <th style="text-align:center;">Boca da calça</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cintura</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Quadril</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura do quadril</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cintura ao joelho</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cintura ao tornozelo</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Largura do joelho</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura da saia</th>
                                                  </tr>						        
					      </thead>
                                            </table>
                                                                </div>
                                                                <div class="col-md-2">
                                            <table class="table table-style-1 table-bordered">
                                                    <?php
                                                      foreach($dadosmedb as $i=>$v) {                                                        
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<tr><td style='text-align:center;'>$v2 cm</td></tr>";
                                                        }                                                        
                                                      }
                                                    ?>
					    </table>
                                                                </div>                   
							    </div>
							    <div role="tabpanel" class="tab-pane" id="med2">
                                                                <div class="col-md-3">
                                                                    <img src="../../assets/images/med2.png" alt="">
                                                                </div>
                                                                <div class="col-md-3">
                                            <table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
                                                  <th style="text-align:center;">Comprimento do braço</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Largura do braço</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Punho</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura da manga 3/4</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura da manga curta</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cavas frente</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Centro frente</th>
                                                  </tr><tr> 
                                                  <th style="text-align:center;">Cavas costas</th>
                                                  </tr><tr>                                                      
                                                  <th style="text-align:center;">Altura da frente</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura das costas</th>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura do gancho frente</th>
                                                  </tr><tr>    
                                                  <th style="text-align:center;">Altura do gancho costas</th>
                                                  </tr>						        
					      </thead>
                                            </table>
                                                                </div>
                                                                <div class="col-md-2">
                                            <table class="table table-style-1 table-bordered">
                                                    <?php
                                                      foreach($dadosmedc as $i=>$v) {                                                        
                                                        foreach ($v as $i2 => $v2) {
                                                          echo "<tr><td style='text-align:center;'>$v2 cm</td></tr>";
                                                        }                                                        
                                                      }
                                                    ?>
					    </table>
                                                                </div>                    
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