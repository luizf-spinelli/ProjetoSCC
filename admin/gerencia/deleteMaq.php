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
  	$idmaq=$_GET["idmaq"];
        $tip=$_GET["tip"];
  	include_once("./layout/deletarMaq.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Máquina excluída com sucesso.";
	if (!isset($_POST["IDMAQ"])
                ) 
	{
		$MensagemErro="Parametros inválidos. Por favor, tente novamente.";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM MAQUINA WHERE idmaq=?");
		mysqli_stmt_bind_param($pm,"i",$idmaq);
                $idmaq=$_POST["IDMAQ"];
                mysqli_stmt_execute($pm); 
	}
            header('Location: manageMaq.php');
  } else {
  	include_once("../report.php");
  }
?>