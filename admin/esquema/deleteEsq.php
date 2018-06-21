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
  	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Esquema excluído.</div>";
	if (!isset($_POST["id"])
                ) 
	{
		$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
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
  	header('Location: manageEsq.php');
  }
?>