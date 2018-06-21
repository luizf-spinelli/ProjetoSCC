<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: show.php');
        } 
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente=$_GET["idcliente"];
        $nm=$_GET["nm"];
  	include_once("./layout/deletarCli.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Cliente excluído.</div>";
	if (!isset($_POST["IDCLIENTE"]) ||
            !isset($_POST["NM"])
                ) 
	{
		$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM CLIENTE_MEDIDAS WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pm,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pm);
                $pd=mysqli_prepare($con,"DELETE FROM PEDIDO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pp,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pd);                
		$ps=mysqli_prepare($con,"DELETE FROM CLIENTE_FISICO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($ps,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($ps);
                $pj=mysqli_prepare($con,"DELETE FROM CLIENTE_JURIDICO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pj,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pj);
                $pt=mysqli_prepare($con,"DELETE FROM CLIENTE_CONTATO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pt,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pt);
                $pk=mysqli_prepare($con,"DELETE FROM CLIENTE_ENDERECO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pk,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pk);                
                $pp=mysqli_prepare($con,"DELETE FROM CLIENTE WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pp,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pp);                
	}
            header('Location: show.php');
  } else {
  	header('Location: show.php');
  }
?>