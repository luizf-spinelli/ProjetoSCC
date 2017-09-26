<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente="";$nm="";$ed="";$cnpj="";$cel="";$tel="";$em="";
  	include_once("cadastroJ.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Cliente cadastrado com sucesso!";
	if (!isset($_POST["IDCLIENTE"]) || 
		!isset($_POST["NM"]) ||
		!isset($_POST["ED"]) ||
		!isset($_POST["TEL"]) ||
		!isset($_POST["CEL"]) ||
                !isset($_POST["EM"]) ||
		!isset($_POST["CNPJ"])
	   ) 
	{
		$MensagemErro="Cliente não cadastrado, parametros invalidos.";
	}
	else
	{
		include_once("conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO CLIENTE VALUES(?,?,?)");
		mysqli_stmt_bind_param($ps,"iss",$idcliente,$nm,$ed);
		$idcliente=$_POST["IDCLIENTE"];
		$nm=$_POST["NM"];
		$ed=$_POST["ED"];
                $pr=mysqli_prepare($con,"INSERT INTO CLIENTE_JURIDICO VALUES(?,?)");
		mysqli_stmt_bind_param($pr,"is",$idcliente,$cnpj);
		$idcliente=$_POST["IDCLIENTE"];
		$cnpj=$_POST["CNPJ"];
                $pp=mysqli_prepare($con,"INSERT INTO CLIENTE_CONTATO VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($pp,"isss",$idcliente,$tel,$cel,$em);
		$idcliente=$_POST["IDCLIENTE"];
		$tel=$_POST["TEL"];
                $cel=$_POST["CEL"];
                $em=$_POST["EM"];
                mysqli_stmt_execute($ps);
                mysqli_stmt_execute($pp);
		mysqli_stmt_execute($pr);
	}
    include_once("report.php");
  } else {
  	include_once("report.php");
  }
?>