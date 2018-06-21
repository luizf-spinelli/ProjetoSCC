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
  	$nom="";$usu="";$snh="";$ace="";
  	include_once("./layout/cadastroAcc.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = 1;
	if (!isset($_POST["SNH"]) ||
                !isset($_POST["NOM"]) ||
                !isset($_POST["USU"]) ||
		!isset($_POST["ACE"])
	   ) 
	{
		$_SESSION['erro'] = 1;
	}
	else
	{       
                include_once("../functions/conexao.php");
		$con=abreConexao();         
                $pa=mysqli_prepare($con,"INSERT INTO KACCESSK(nome,usuario,senha,ACESSO) VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($pa,"ssss",$nom,$usu,$snh,$ace);		
		$nom=$_POST["NOM"];
		$usu=$_POST["USU"];
		$snh=$_POST["SNH"];
		$ace=$_POST["ACE"];
                mysqli_stmt_execute($pa);
	}
            header('Location: ../cadastro.php');
  } else {
  	header('Location: ../cadastro.php');
  }
?>