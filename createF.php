<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente="";$nm="";$ed="";$cpf="";$cel="";$tel="";$em="";$rg="";
  	include_once("cadastroF.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Cliente cadastrado com sucesso!";
	if (!isset($_POST["IDCLIENTE"]) || 
		!isset($_POST["NM"]) ||
		!isset($_POST["ED"]) ||
                !isset($_POST["RG"]) ||
                !isset($_POST["CEL"]) ||
                !isset($_POST["TEL"]) ||
                !isset($_POST["EM"]) ||
		!isset($_POST["CPF"])
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
                mysqli_stmt_execute($ps);                
                $pr=mysqli_prepare($con,"INSERT INTO CLIENTE_FISICO VALUES(?,?,?)");
		mysqli_stmt_bind_param($pr,"iss",$idcliente,$cpf,$rg);
		$idcliente=$_POST["IDCLIENTE"];
		$cpf=$_POST["CPF"];
                $rg=$_POST["RG"];
                mysqli_stmt_execute($pr);
                $pp=mysqli_prepare($con,"INSERT INTO TELEFONE VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($pp,"isss",$idcliente,$tel,$cel,$em);
		$idcliente=$_POST["IDCLIENTE"];
		$tel=$_POST["TEL"];
                $cel=$_POST["CEL"];
                $em=$_POST["EM"];
                mysqli_stmt_execute($pp);
	}
    include_once("report.php");
  } else {
  	include_once("report.php");
  }
?>