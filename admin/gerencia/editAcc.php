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
  	header('Location: manageAcc.php');
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadosacc = array();  
        
    $pf=mysqli_prepare($con,"SELECT ID,NOME,USUARIO,SENHA,ACESSO FROM kaccessk WHERE ID=?");
    mysqli_stmt_bind_param($pf,"i",$id);
    $id=$_GET["id"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$id,$nus,$usu,$snh,$ace);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosacc,array($id,$nus,$usu,$snh,$ace));
      $_SESSION["id"]=$id;
    }
    
    include_once("./layout/editarAcc.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Conta alterada.</div>";
	    if (!isset($_POST["ID"]) ||
		!isset($_POST["NUS"]) ||
                !isset($_POST["USU"]) ||
                !isset($_POST["SNH"]) ||
		!isset($_POST["ACE"])
	       )  
	    {
		  $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
		  header('Location: manageAcc.php');
	    } else {
  		  $pf=mysqli_prepare($con,"update kaccessk set NOME=?, USUARIO=?, SENHA=?, ACESSO=? where ID=?");
  		  mysqli_stmt_bind_param($pf,"ssssi",$_POST["NUS"],$_POST["USU"],$_POST["SNH"],$_POST["ACE"],$_POST["ID"]);
  		  mysqli_stmt_execute($pf);

            header('Location: manageAcc.php');
	    }
  	} else {
  		header('Location: manageAcc.php');
  	}
  }
?>
