    <footer class="main-footer">

        <div class="footer-top">            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="footer-col">

                            <h4 class="footer-title">Navegação <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <div class="col-md-3">
                                    <ul>
                                    <li><a href="http://localhost:8080/ProjetoSCC/admin/home.php">Home</a></li>
                                        <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia.php">Gerenciar</a></li>
                                        <ul>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/show.php">Clientes</a></li>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageMed.php">Medidas</a></li>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/managePed.php">Pedidos</a></li>
                                            <?php if($_SESSION['usuarioAcesso'] == 2): ?>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageServ.php">Serviços</a></li>                                            
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageMaq.php">Máquinas</a></li>                                            
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageFunc.php">Funcionários</a></li>                                            
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/gerencia/manageAcc.php">Contas de acesso</a></li>                                            
                                            <?php endif; ?>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro.php">Cadastrar</a></li>
                                        <ul>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createF.php">Pessoa Física</a></li>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createJ.php">Pessoa Jurídica</a></li>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/showMed.php">Medida</a></li>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/showPed.php">Pedido</a></li>
                                            <?php if($_SESSION['usuarioAcesso'] == 2): ?>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createServ.php">Serviço</a></li>                                            
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createMaq.php">Máquina</a></li>                                            
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createFunc.php">Funcionário</a></li>                                            
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/cadastro/createAcc.php">Conta de acesso</a></li>  
                                            <?php endif; ?>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="http://localhost:8080/ProjetoSCC/admin/esquema/manageEsq.php">Esquema</a></li>
                                        <?php if($_SESSION['usuarioAcesso'] == 2): ?>
                                        <li><a href="http://localhost:8080/ProjetoSCC/admin/estatistica.php">Estatísticas</a></li>
                                        <ul>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/estatistica/estCli.php">Clientes</a></li>
                                            <li><a href="http://localhost:8080/ProjetoSCC/admin/estatistica/estPed.php">Pedidos</a></li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="col-md-3"> 
                                        <?php endif; ?>
                                        <li><a href="http://localhost:8080/ProjetoSCC/logout.php">Sair</a></li>
                                </div>                
                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="clearfix"></div>

                </div>                
                
            </div>
            
        </div>

        <div class="footer-bottom">

            <div class="container text-center">
                Sirlene Costura & Confecção @ Copyright 2018 - by <a href="#" target="_blank">LFS</a>
            </div>
        </div>
        
    </footer> <!-- main-footer -->    