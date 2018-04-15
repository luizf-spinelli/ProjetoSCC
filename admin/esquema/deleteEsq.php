<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: ../manageEsq.php');
        } 
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$id=$_GET["id"];
  	$nome=$_GET["nome"];
  	$img=$_GET["img"];
  	include_once("./layout/deletarEsq.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Esquema excluído com sucesso.";
	if (!isset($_POST["id"])
                ) 
	{
		$MensagemErro="Parametros inválidos. Por favor, tente novamente.";
	}
	else
                {       
                include_once("../functions/conexao.php");                                
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM esquema WHERE id=?");
		mysqli_stmt_bind_param($pm,"i",$id);
                $id=$_POST["id"];
                unlink('../../uploads/'.$img);
                mysqli_stmt_execute($pm);                          
	}
            header('Location: manageEsq.php');
  } else {
  	include_once("../report.php");
  }
?>