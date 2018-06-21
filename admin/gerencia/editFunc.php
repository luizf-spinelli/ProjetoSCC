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
  	header('Location: manageFunc.php');
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadosfunc = array();  
        
    $pf=mysqli_prepare($con,"SELECT REGISTRO,NOME,FUNCAO,DTADMISSAO,DTDEMISSAO FROM FUNCIONARIO WHERE REGISTRO=?");
    mysqli_stmt_bind_param($pf,"i",$reg);
    $reg=$_GET["reg"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$reg,$nom,$fun,$dta,$dtd);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosfunc,array($reg,$nom,$fun,$dta,$dtd));
      $_SESSION["reg"]=$reg;
    }
    
    include_once("./layout/editarFunc.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Funcionário alterado.</div>";
	    if (!isset($_POST["REG"]) ||
		!isset($_POST["NOM"]) ||
		!isset($_POST["FUN"])
	       )  
	    {
		  $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
		  header('Location: manageFunc.php');
	    } else {
  		  $pf=mysqli_prepare($con,"update FUNCIONARIO set NOME=?, FUNCAO=?, DTADMISSAO=?, DTDEMISSAO=? where REGISTRO=?");
  		  mysqli_stmt_bind_param($pf,"ssssi",$_POST["NOM"],$_POST["FUN"],$_POST["DTA"],$_POST["DTD"],$_POST["REG"]);
  		  mysqli_stmt_execute($pf);

            header('Location: manageFunc.php');
	    }
  	} else {
  		header('Location: manageFunc.php');
  	}
  }
?>