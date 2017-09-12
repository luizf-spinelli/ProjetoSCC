<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente=$_GET["idcliente"];
        $nm=$_GET["nm"];
  	include_once("deletarF.php");
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
                include_once("conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM CLIENTE_MEDIDAS WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pm,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pm);
		$ps=mysqli_prepare($con,"DELETE FROM CLIENTE_FISICO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($ps,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($ps);
                $pt=mysqli_prepare($con,"DELETE FROM TELEFONE WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pt,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pt);
                $pp=mysqli_prepare($con,"DELETE FROM CLIENTE WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pp,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pp);
                $pj=mysqli_prepare($con,"DELETE FROM CLIENTE_JURIDICO WHERE IDCLIENTE=?");
		mysqli_stmt_bind_param($pj,"i",$idcliente);
                $idcliente=$_POST["IDCLIENTE"];
                mysqli_stmt_execute($pj);                
	}
    include_once("report.php");
  } else {
  	include_once("report.php");
  }
?>