<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$nom="";$idace="";$usu="";$snh="";$ace="";
  	include_once("./layout/cadastroAcc.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Conta cadastrada com sucesso!";
	if (!isset($_POST["IDACE"]) ||
                !isset($_POST["USU"]) ||
                !isset($_POST["NOM"]) ||
                !isset($_POST["SNH"]) ||
		!isset($_POST["ACE"])
	   ) 
	{
		$MensagemErro="Conta não cadastrada, parametros invalidos.";
	}
	else
	{                
                $pa=mysqli_prepare($con,"INSERT INTO KACCESSK VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($pa,"issss",$idace,$nom,$usu,$snh,$ace);
		$idace=$_POST["IDACE"];
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