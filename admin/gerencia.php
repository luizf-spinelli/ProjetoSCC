<?PHP
session_start();
if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
    session_destroy();
    header('Location: ../login.php');
        }
?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Gerencia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="../assets/js/modernizr-2.6.2.min.js"></script>
    </head>

<?php include("../fix/header.php"); ?>
    
    	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Gerenciar</span></h1>
			<p class="page-description">
				Liste, edite, remova e gerencie.
			</p>
			
		</div>

	</div>
            <div class="container">
            <div class="row">
<?php include("../fix/welcome.php"); ?>                
            </div>
                <p><a style="text-decoration: underline" href="home.php">Funções</a> &raquo; <b><a style="text-decoration: underline" href="gerencia.php">Gerenciar</a></b></p>
            </div>
        
    
        <div class="section-home about-us fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-user fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Clientes</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de seus clientes.</p>
                          
                        </div>
                        <a href="gerencia/show.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>

                <div class="col-md-4 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Medidas</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de suas medidas.</p>
                          
                        </div>
                        <a href="gerencia/manageMed.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>

                <div class="col-md-4 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-comment-o fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Pedidos</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de seus pedidos.</p>
                          
                        </div>
                        <a href="gerencia/managePed.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>
            </div>
            <?php if($_SESSION['usuarioAcesso'] == 2): ?>
                <div class="row"><br/>
                
                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-wrench fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Serviços</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de seus serviços.</p>
                          
                        </div>
                        <a href="gerencia/manageServ.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>
                
                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-gears fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Máquinas</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de suas máquinas.</p>
                          
                        </div>
                        <a href="gerencia/manageMaq.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>
                
                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-users fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Funcionários</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de seus funcionários.</p>
                          
                        </div>
                        <a href="gerencia/manageFunc.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>
                
                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <span><i class="fa fa-lock fa-5x" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="col-title">Contas de acesso</h3>
                        <div class="col-details">

                          <p>Veja mais detalhes, remova e edite as informações de suas contas de acesso.</p>
                          
                        </div>
                        <a href="gerencia/manageAcc.php" class="btn btn-primary"> Ir </a>
                    
                  </div>
                  
                </div>
                    <?php endif; ?>
            </div><br/>
            <div class="container">            
                                        <div class="form-group">
                                            <a href="home.php" class="btn btn-default">&larr; Voltar</a>
                                        </div>
            </div>
            </div>

        </div><br/>
    
<?php include("../fix/private-footer.php"); ?>
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="../assets/js/bootstrap.min.js"></script>

        <!-- Template main javascript -->
        <script src="../assets/js/main.js"></script>
    </body>
</html>