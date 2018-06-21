<?php
if($_POST['chave'] != "sirlene123") 
	{
    session_start();
    $_SESSION['msg1'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Chave de acesso inválida.</div>";  
    header('Location: ./login-esquema.php');
        }
?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sirlene Costura & Confecção - Esquematize</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <!-- Literally Canvas -->
        <link href="./assets/css/literallycanvas.css" rel="stylesheet">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">       
       
       <script src="assets/js/jquery.js"></script>
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        
        <style type="text/css">
        .fs-container {
        width: auto;
        height: auto;        
        margin: auto;
        }

        .literally {
        width: 100%;
        height: 500px;
        position: relative;
        }
        </style>  
        
    </head>
    
<?php include("./fix/public-header.php"); ?>

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">ESQUEMATIZE <span class="title-under"></span></h1>
			<p class="page-description">
			</p>
			
		</div>

	</div>

	<div class="main-container">
            <div id="topo" class="container">
                            <h2 class="title-style-2"> Esquematize <span class="title-under"></span></h2>
                            <h4>Nada mais prático e didático do que um desenho, não é? Esboce um esquema de seu pedido e nos envie!</h4>
                            <h4>Você pode salvar seu esquema ao clicar com o botão direito do mouse em cima da área de desenho. </h4>
                
                <div class="col-md-12">
                   
                        <div id="fs-container" class="fs-container">
                            <div id="lc"></div>
                        </div>

    <script src="./assets/js/react-0.14.3.js"></script>
    <script src="./assets/js/literallycanvas.js"></script>

    <script type="text/javascript">
      var lc = LC.init(document.getElementById("lc"), {
        imageURLPrefix: './assets/images/lc-images',
        toolbarPosition: 'bottom',
        defaultStrokeWidth: 4,
        strokeWidths: [2, 4, 6, 8, 15, 25]
      });
    var newImage = new Image();
    newImage.src = './assets/images/logotipo.png';
    lc.saveShape(LC.createShape('Image', {x: 5, y: 5, image: newImage}));
    var nImage = new Image();
    nImage.src = './assets/images/m0.png';
    lc.saveShape(LC.createShape('Image', {x: 100, y: 2, image: nImage}));
    var nvImage = new Image();
    nvImage.src = './assets/images/m1.png';
    lc.saveShape(LC.createShape('Image', {x: 300, y: 2, image: nvImage}));
    </script>
                </div>
            </div><br/>
         
            <div class="container">
                <form action="envia-esquema.php" method="post" enctype="multipart/form-data">
                            <div class="form-group col-md-3">
                                <span class="contact-icon"><i class="fa fa-user"></i></span> Nome<font color="red">*</font>
                                <input type="text" name="nome" value="" maxlength="25" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <span class="contact-icon"><i class="fa fa-envelope"></i></span> E-mail<font color="red">*</font>
                                <input type="email" name="email" value="" maxlength="35" class="form-control" required>
                            </div>
                            <div class="form-group col-md-5">
                                <span class="contact-icon"><i class="fa fa-table"></i></span> Descrição<font color="red">*</font>
                                <textarea type="text" name="desc" rows="3" value="" maxlength="150" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-danger">Limpar</button>                                
                            <label class="btn btn-info" for="my-file-selector">
                                <input id="my-file-selector" name="fileToUpload" type="file" style="display:none" 
                                       onchange="$('#upload-file-info').html(this.files[0].name)" accept="image/*" required>
                                Anexar
                            </label>
                            <span class='label label-info' id="upload-file-info"></span>
                            </div>
                </form>
                    </div>
            </div>            
    
<?php include("./fix/footer.php"); ?>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>  
        
        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>        


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>	