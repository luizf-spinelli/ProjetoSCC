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
  	$idserv=$_GET["idserv"];
        $tp=$_GET["tp"];
  	include_once("./layout/deletarServ.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Serviço excluído.</div>";
	if (!isset($_POST["IDSERV"])
                ) 
	{
		$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM servico WHERE idserv=?");
		mysqli_stmt_bind_param($pm,"i",$idserv);
                $idserv=$_POST["IDSERV"];
                mysqli_stmt_execute($pm); 
	}
            header('Location: manageServ.php');
  } else {
  	header('Location: manageServ.php');
  }
?>