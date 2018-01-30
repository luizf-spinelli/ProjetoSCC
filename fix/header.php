    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-instagram"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>

                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="http://localhost:8080/ProjetoSCC/index.php"><img src="http://localhost:8080/ProjetoSCC/assets/images/sirlene-logo_final.png" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="http://localhost:8080/ProjetoSCC/admin/home.php">HOME</a></li>
                    <li class="has-child"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia.php">GERENCIAR</a>
                      <ul class="submenu">
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/show.php">Clientes </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageMed.php">Medidas </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/managePed.php">Pedidos </a></li>
                         <?php if($_SESSION['usuarioAcesso'] == 2): ?>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageServ.php">Serviços </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageMaq.php">Máquinas </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageFunc.php">Funcionários </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageAcc.php">Conta de acesso </a></li>
                         <?php endif; ?>
                      </ul>
                    </li>
                    <li class="has-child"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro.php">CADASTRAR</a>
                      <ul class="submenu">
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createF.php">Pessoa Física </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createJ.php">Pessoa Jurídica </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/showMed.php">Medida </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/showPed.php">Pedido </a></li>
                         <?php if($_SESSION['usuarioAcesso'] == 2): ?>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createServ.php">Serviço </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createMaq.php">Máquina </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createFunc.php">Funcionário </a></li>
                         <li class="submenu-item"><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createAcc.php">Conta de acesso </a></li>
                         <?php endif; ?>
                      </ul>
                    </li>
                    <li><a href="http://localhost:8080/ProjetoSCC/logout.php">SAIR</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->