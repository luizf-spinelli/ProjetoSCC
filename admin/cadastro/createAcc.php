<?php
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$id="";$nom="";$usu="";$snh="";$ace="";
  	include_once("./layout/cadastroAcc.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Conta cadastrada com sucesso!";
	if (!isset($_POST["ID"]) ||
                !isset($_POST["NOM"]) ||
                !isset($_POST["USU"]) ||
                !isset($_POST["SNH"]) ||
		!isset($_POST["ACE"])
	   ) 
	{
		$MensagemErro="Conta não cadastrada, parametros invalidos.";
	}
	else
	{       
                include_once("../functions/conexao.php");
		$con=abreConexao();         
                $pa=mysqli_prepare($con,"INSERT INTO KACCESSK VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($pa,"issss",$id,$nom,$usu,$snh,$ace);
		$id=$_POST["ID"];
		$nom=$_POST["NOM"];
		$usu=$_POST["USU"];
		$snh=$_POST["SNH"];
		$ace=$_POST["ACE"];
                mysqli_stmt_execute($pa);
	}
    include_once("cadastro.php");
  } else {
  	include_once("http://localhost:8080/ProjetoSCC/admin/report.php");
  }
?>