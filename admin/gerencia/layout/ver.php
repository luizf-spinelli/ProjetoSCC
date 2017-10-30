<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
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
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

<?php include("./fix/header.php"); ?>
    
    <body>
        <div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title"><?php echo $nm; ?> <span class="title-under"></span></h1>
			<p class="page-description">
				Listados abaixo, todos os dados relacionados ao cliente selecionado.
			</p>			
		</div>
	</div>
            <div class="container">
            <div class="row">
<?php include("./fix/welcome.php"); ?>
            </div>
                <p><a style="text-decoration: underline" href="cad.php">Funções</a> &raquo; <a style="text-decoration: underline" href="gerenciaH.php">Gerenciar</a> &raquo; 
                    <b><a style="text-decoration: underline" href="show.php"><?php echo $nm; ?></a></b></p>
            </div>
        				<div class="main-container">
                                            <div class="container">
                                            <div class="col-md-6">

					<h2 class="title-style-2">Cliente <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">Nome</th>
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
                                            </div>
                                            
                                            <div class="col-md-6">

					<h2 class="title-style-2">Contato <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">Telefone</th>
                                                  <th style="text-align:center;">Celular</th>
                                                  <th style="text-align:center;">E-mail</th>
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadostel as $i=>$v) {
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
                                            
                                            <div class="col-md-6">

					<h2 class="title-style-2">Pessoa Física <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">CPF</th>
                                                  <th style="text-align:center;">RG</th>
                                                  <th style="text-align:center;">Sexo</th>
                                                  <th style="text-align:center;">Nascimento</th>
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadosfis as $i=>$v) {
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
                                            
                                            <div class="col-md-6">

					<h2 class="title-style-2">Pessoa Jurídica <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">CNPJ</th>
					          <th style="text-align:center;">Razão Social</th>
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadosjur as $i=>$v) {
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
                                                
                                        <div class="col-md-12">

					<h2 class="title-style-2">Endereço <span class="title-under"></span></h2>

						<table class="table table-style-1 table-bordered">
					      <thead>
					        <tr>
					          <th style="text-align:center;">ID</th>
					          <th style="text-align:center;">País</th>
					          <th style="text-align:center;">Estado</th>
					          <th style="text-align:center;">Cidade</th>
					          <th style="text-align:center;">Bairro</th>
					          <th style="text-align:center;">CEP</th>
					          <th style="text-align:center;">Rua</th>
					          <th style="text-align:center;">Complemento</th>
					        </tr>
					      </thead>
					      <tbody>
                                                    <?php
                                                      foreach($dadosend as $i=>$v) {
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
                                            </div>
        </div>
        
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

    </body>
</html>