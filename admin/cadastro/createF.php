<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idcliente="";$nm="";$cpf="";$cel="";$tel="";$em="";$rg="";$sx="";$ns="";$pas="";$est="";$cid="";$brr="";$cep="";$rua="";$com="";
  	include_once("./layout/cadastroF.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Cliente cadastrado com sucesso!";
	if (!isset($_POST["IDCLIENTE"]) || 
		!isset($_POST["NM"])
	   ) 
	{
		$MensagemErro="Cliente não cadastrado, parametros invalidos.";
	}
	else
	{
		include_once("../functions/conexao.php");
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
                $pe=mysqli_prepare($con,"INSERT INTO CLIENTE_ENDERECO VALUES(?,?,?,?,?,?,?,?)");
		mysqli_stmt_bind_param($pe,"sssssssi",$pas,$est,$cid,$brr,$cep,$rua,$com,$idcliente);
		$idcliente=$_POST["IDCLIENTE"];
		$pas=$_POST["PAS"];
                $est=$_POST["EST"];
                $cid=$_POST["CID"];
                $brr=$_POST["BRR"];
                $cep=$_POST["CEP"];
                $rua=$_POST["RUA"];
                $com=$_POST["COM"];
                mysqli_stmt_execute($pe);
	}
    include_once("cadastro.php");
  } else {
  	include_once("http://localhost:8080/ProjetoSCC/admin/report.php");
  }
?>