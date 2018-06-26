<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: ../cadastro.php');
        } 
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$reg="";$nom="";$fun="";$dta="";$dtd="";
  	include_once("./layout/cadastroFunc.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = 1;
	if (!isset($_POST["REG"]) ||
                !isset($_POST["NOM"]) ||
		!isset($_POST["FUN"])
	   ) 
	{
		$_SESSION['erro'] = 1;
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO funcionario VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($ps,"issss",$reg,$nom,$fun,$dta,$dtd);
		$reg=$_POST["REG"];
		$nom=$_POST["NOM"];
		$fun=$_POST["FUN"];
		$dta=$_POST["DTA"];
		$dtd=$_POST["DTD"];
                mysqli_stmt_execute($ps);

	}
            header('Location: ../cadastro.php');
  } else {
  	header('Location: ../cadastro.php');
  }
?>