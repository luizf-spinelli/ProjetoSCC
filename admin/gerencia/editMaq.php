<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: ../gerencia.php');
        } 
  include("../functions/conexao.php");  
  if (!$con=abreConexao()) {
  	$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
  	header('Location: manageMaq.php');
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadosmaq = array();  
        
    $pf=mysqli_prepare($con,"SELECT IDMAQ,TIPO,MODELO,DTUMANUTENCAO,DTPMANUTENCAO FROM maquina WHERE IDMAQ=?");
    mysqli_stmt_bind_param($pf,"i",$idmaq);
    $idmaq=$_GET["idmaq"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$idmaq,$tip,$mod,$dtm,$pnm);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosmaq,array($idmaq,$tip,$mod,$dtm,$pnm));
      $_SESSION["idmaq"]=$idmaq;
    }
    
    include_once("./layout/editarMaq.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Máquina alterada.</div>";
	    if (!isset($_POST["IDMAQ"]) ||
		!isset($_POST["TIP"]) ||
		!isset($_POST["MOD"])
	       )  
	    {
		  $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
		  header('Location: manageMaq.php');
	    } else {
  		  $pf=mysqli_prepare($con,"update maquina set TIPO=?, MODELO=?, DTUMANUTENCAO=?, DTPMANUTENCAO=? where IDMAQ=?");
  		  mysqli_stmt_bind_param($pf,"ssssi",$_POST["TIP"],$_POST["MOD"],$_POST["DTM"],$_POST["PNM"],$_POST["IDMAQ"]);
  		  mysqli_stmt_execute($pf);

            header('Location: manageMaq.php');
	    }
  	} else {
  		header('Location: manageMaq.php');
  	}
  }
?>