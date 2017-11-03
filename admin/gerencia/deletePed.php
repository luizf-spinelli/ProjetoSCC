<?php
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
    include_once("../report.php");
  } else {
  	include_once("../report.php");
  }
?>