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
			
			<h1 class="page-title">Editar Medida<span class="title-under"></span></h1>
			<p class="page-description">
				Listados abaixo, todos os dados relacionados a medida a ser editada.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("../../fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="../home.php">Funções</a> &raquo; <a style="text-decoration: underline" href="../gerencia.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="manageMed.php">Medidas</a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                                <form action="editMed.php" method="POST">
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
                                                  <tr>
                                                      <td><input type="text" name="IDCLIENTE" pattern="([0-9]{1,4})" value="<?= $idcliente ?>" size="1" class="form-control" style="text-align:center;" readonly></td>
                                                      <td><input type="text" name="NM" value="<?= $nm ?>" class="form-control" placeholder="" readonly></td>
                                                  </tr>
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
                                                  <tr>
                                                      <td><input type="text" name="IDMEDIDA" pattern="([0-9]{1,4})" value="<?= $idmedida ?>" size="1" maxlength="4" class="form-control" style="text-align:center;" required></td>
                                                      <td><input type="text" name="OBS" value="<?= $obs ?>" maxlength="100" class="form-control" required></td>
                                                </tr>
					      </tbody>
					    </table>    
							    </div>
							    <div role="tabpanel" class="tab-pane" id="med1">
                                                                <div class="col-md-3 hidden-sm hidden-xs">
                                                                    <img src="../../assets/images/med1.png" alt="">
                                                                </div>
                                                                <div class="col-md-6">
                                            <table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>                                                  
                                                  <th style="text-align:center;">Ombro a Ombro</th>
                                                  <td><input type="text" name="OAO" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $oao ?>" maxlength="7" class="form-control" placeholder="000.00"> </td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Ombro</th>
                                                  <td><input type="text" name="OMB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $omb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Colarinho</th>
                                                  <td><input type="text" name="COL" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $col ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Busto</th>
                                                  <td><input type="text" name="BST" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $bst ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura do Busto</th>
                                                  <td><input type="text" name="ATB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Separação do Busto</th>
                                                  <td><input type="text" name="SPB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $spb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr>				        
					      </thead>
                                            </table>
                                                                </div>
							    </div>
                                                              
							    <div role="tabpanel" class="tab-pane" id="med3">
                                                                <div class="col-md-3 hidden-sm hidden-xs">
                                                                    <img src="../../assets/images/med3.png" alt="">
                                                                </div>
                                                                <div class="col-md-6">
                                            <table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>                                                  
                                                  <th style="text-align:center;">Boca da calça</th>
                                                  <td><input type="text" name="BCC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $bcc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cintura</th>
                                                  <td><input type="text" name="CIN" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cin ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Quadril</th>
                                                  <td><input type="text" name="QDR" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $qdr ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura do quadril</th>
                                                  <td><input type="text" name="ATQ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atq ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cintura ao joelho</th>
                                                  <td><input type="text" name="CAJ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $caj ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cintura ao tornozelo</th>
                                                  <td><input type="text" name="CAT" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cat ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Largura do joelho</th>
                                                  <td><input type="text" name="LGJ" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $lgj ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura da saia</th>
                                                  <td><input type="text" name="ATS" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $ats ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr>						        
					      </thead>
                                            </table>
                                                                </div>                  
							    </div>
                                                              
							    <div role="tabpanel" class="tab-pane" id="med2">
                                                                <div class="col-md-3 hidden-sm hidden-xs">
                                                                    <img src="../../assets/images/med2.png" alt="">
                                                                </div>
                                                                <div class="col-md-6">
                                            <table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
                                                  <th style="text-align:center;">Comprimento do braço</th>
                                                  <td><input type="text" name="CPB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cpb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Largura do braço</th>
                                                  <td><input type="text" name="LGB" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $lgb ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Punho</th>
                                                  <td><input type="text" name="PNH" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $pnh ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura da manga 3/4</th>
                                                  <td><input type="text" name="AMT" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $amt ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura da manga curta</th>
                                                  <td><input type="text" name="ATM" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atm ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Cavas frente</th>
                                                  <td><input type="text" name="CVF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cvf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Centro frente</th>
                                                  <td><input type="text" name="CTF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $ctf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr> 
                                                  <th style="text-align:center;">Cavas costas</th>
                                                  <td><input type="text" name="CVC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $cvc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>                                                      
                                                  <th style="text-align:center;">Altura da frente</th>
                                                  <td><input type="text" name="ATF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura das costas</th>
                                                  <td><input type="text" name="ATC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $atc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>
                                                  <th style="text-align:center;">Altura do gancho frente</th>
                                                  <td><input type="text" name="AGF" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $agf ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr><tr>    
                                                  <th style="text-align:center;">Altura do gancho costas</th>
                                                  <td><input type="text" name="AGC" pattern="([0-9]{1,4}.{1}[0-9]{0,2})" value="<?= $agc ?>" maxlength="7" class="form-control" placeholder="000.00"></td>
                                                  </tr>						        
					      </thead>
                                            </table>
                                                                </div>                                                                                  
							    </div>
							  </div>
						</div>						
                                            </div>                                            
                                                    
                        <div class="col-md-6 form-group">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="editMed.php?idmedida=<?= $idmedida ?>&idcliente=<?= $idcliente ?>" class="btn btn-danger">Desfazer</a> 
                                    <a href="manageMed.php" class="btn btn-default">Cancelar</a>
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