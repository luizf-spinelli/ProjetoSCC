<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente="";$nm="";$ed="";$cpf="";$cel="";$tel="";$em="";$rg="";$sx="";$ns="";
  	include_once("cadastroF.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Cliente cadastrado com sucesso!";
	if (!isset($_POST["IDCLIENTE"]) || 
		!isset($_POST["NM"]) ||
		!isset($_POST["SX"]) ||
		!isset($_POST["NS"]) ||                
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
		$ps=mysqli_prepare($con,"INSERT INTO CLIENTE VALUES(?,?)");
		mysqli_stmt_bind_param($ps,"is",$idcliente,$nm);
		$idcliente=$_POST["IDCLIENTE"];
		$nm=$_POST["NM"];
                mysqli_stmt_execute($ps);                
                $pr=mysqli_prepare($con,"INSERT INTO CLIENTE_FISICO VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($pr,"issss",$idcliente,$cpf,$rg,$sx,$ns);
		$idcliente=$_POST["IDCLIENTE"];
		$cpf=$_POST["CPF"];
                $rg=$_POST["RG"];
                $sx=$_POST["SX"];
                $ns=$_POST["NS"];
                mysqli_stmt_execute($pr);
                $pp=mysqli_prepare($con,"INSERT INTO CLIENTE_CONTATO VALUES(?,?,?,?)");
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