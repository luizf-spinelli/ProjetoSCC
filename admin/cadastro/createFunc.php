<?php
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$reg="";$nom="";$fun="";$dta="";$dtd="";
  	include_once("./layout/cadastroFunc.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Funcionário cadastrado com sucesso!";
	if (!isset($_POST["REG"]) ||
                !isset($_POST["NOM"]) ||
		!isset($_POST["FUN"])
	   ) 
	{
		$MensagemErro="Funcionário não cadastrado, parametros invalidos.";
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO FUNCIONARIO VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($ps,"issss",$reg,$nom,$fun,$dta,$dtd);
		$reg=$_POST["REG"];
		$nom=$_POST["NOM"];
		$fun=$_POST["FUN"];
		$dta=$_POST["DTA"];
		$dtd=$_POST["DTD"];
                mysqli_stmt_execute($ps);

	}
    include_once("cadastro.php");
  } else {
  	include_once("http://localhost:8080/ProjetoSCC/admin/report.php");
  }
?>