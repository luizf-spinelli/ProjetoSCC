<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: managePed.php');
        } 
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente=$_GET["idcliente"];
        $idpedido=$_GET["idpedido"];
  	include_once("./layout/deletarPed.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Pedido excluído.</div>";
	if (!isset($_POST["IDPEDIDO"])
                ) 
	{
		$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM PEDIDO WHERE idpedido=?");
		mysqli_stmt_bind_param($pm,"i",$idpedido);
                $idpedido=$_POST["IDPEDIDO"];
                mysqli_stmt_execute($pm);
                
                $pg=mysqli_prepare($con,"DELETE FROM PAGAMENTO WHERE idpedido=?");
		mysqli_stmt_bind_param($pg,"i",$idpedido);
                $idpedido=$_POST["IDPEDIDO"];
                mysqli_stmt_execute($pg);
	}
            header('Location: managePed.php');
  } else {
  	header('Location: managePed.php');
  }
?>