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
  	$MensagemErro="Pedido excluído com sucesso.";
	if (!isset($_POST["IDPEDIDO"])
                ) 
	{
		$MensagemErro="Parametros inválidos. Por favor, tente novamente.";
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
  	include_once("../report.php");
  }
?>