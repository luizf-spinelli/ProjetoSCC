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
  	header('Location: manageServ.php');
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadosserv = array();  
        
    $pf=mysqli_prepare($con,"SELECT IDSERV,TIPO,VALOR_BASE,DURACAO FROM SERVICO WHERE IDSERV=?");
    mysqli_stmt_bind_param($pf,"i",$idserv);
    $idserv=$_GET["idserv"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$idserv,$tp,$vlb,$dur);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosserv,array($idserv,$tp,$vlb,$dur));
      $_SESSION["idserv"]=$idserv;
    }
    
    include_once("./layout/editarServ.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Serviço alterado.</div>";
	    if (!isset($_POST["IDSERV"]) ||
		!isset($_POST["TP"]) ||
                !isset($_POST["VLB"]) ||
		!isset($_POST["DUR"])
	       )  
	    {
		  $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
		  header('Location: manageServ.php');
	    } else {
  		  $pf=mysqli_prepare($con,"update SERVICO set TIPO=?, VALOR_BASE=?, DURACAO=? where IDSERV=?");
  		  mysqli_stmt_bind_param($pf,"sssi",$_POST["TP"],$_POST["VLB"],$_POST["DUR"],$_POST["IDSERV"]);
  		  mysqli_stmt_execute($pf);

            header('Location: manageServ.php');
	    }
  	} else {
  		header('Location: manageServ.php');
  	}
  }
?>