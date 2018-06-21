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
  	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Funcionário excluído.</div>";
	if (!isset($_POST["REG"])
                ) 
	{
		$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
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
  	header('Location: manageFunc.php');
  }
?>