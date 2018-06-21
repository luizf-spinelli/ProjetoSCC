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
  	$id=$_GET["id"];
        $usu=$_GET["usu"];
  	include_once("./layout/deletarAcc.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Conta excluída.</div>";
	if (!isset($_POST["ID"])
                ) 
	{
		$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM KACCESSK WHERE id=?");
		mysqli_stmt_bind_param($pm,"i",$id);
                $id=$_POST["ID"];
                mysqli_stmt_execute($pm); 
	}
            header('Location: manageAcc.php');
  } else {
  	header('Location: manageAcc.php');
  }
?>