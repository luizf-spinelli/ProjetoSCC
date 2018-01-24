<?php
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente=$_GET["idcliente"];
        $nm=$_GET["nm"];
  	include_once("./layout/deletarCli.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Cliente excluído com sucesso.";
	if (!isset($_POST["IDCLIENTE"]) ||
            !isset($_POST["NM"])
                ) 
	{
		$MensagemErro="Parametros inválidos. Por favor, tente novamente.";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM CLIENTE_MEDIDAS WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pm,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pm);
		$ps=mysqli_prepare($con,"DELETE FROM CLIENTE_FISICO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($ps,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($ps);
                $pt=mysqli_prepare($con,"DELETE FROM CLIENTE_CONTATO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pt,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pt);
                $pk=mysqli_prepare($con,"DELETE FROM CLIENTE_ENDERECO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pk,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pk);
                $pj=mysqli_prepare($con,"DELETE FROM CLIENTE_JURIDICO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pj,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pj);
                $pp=mysqli_prepare($con,"DELETE FROM CLIENTE WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pp,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pp);
	}
    include_once("show.php");
  } else {
  	include_once("../report.php");
  }
?>