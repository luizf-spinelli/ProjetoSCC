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
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$reg=$_GET["reg"];
        $nom=$_GET["nom"];
  	include_once("./layout/deletarFunc.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Funcionário excluído com sucesso.";
	if (!isset($_POST["REG"])
                ) 
	{
		$MensagemErro="Parametros inválidos. Por favor, tente novamente.";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM FUNCIONARIO WHERE registro=?");
		mysqli_stmt_bind_param($pm,"i",$reg);
                $reg=$_POST["REG"];
                mysqli_stmt_execute($pm); 
	}
            header('Location: manageFunc.php');
  } else {
  	include_once("../report.php");
  }
?>