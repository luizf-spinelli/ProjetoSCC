<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idserv="";$tp="";$vlb="";$dur="";
  	include_once("./layout/cadastroServ.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Serviço cadastrado com sucesso!";
	if (!isset($_POST["IDSERV"]) || 
		!isset($_POST["TP"])
	   ) 
	{
		$MensagemErro="Serviço não cadastrado, parametros invalidos.";
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO SERVICO VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($ps,"isss",$idserv,$tp,$vlb,$dur);
		$idserv=$_POST["IDSERV"];
		$tp=$_POST["TP"];
		$vlb=$_POST["VLB"];
		$dur=$_POST["DUR"];
                mysqli_stmt_execute($ps);                
	}
    include_once("cadastro.php");
  } else {
  	include_once("http://localhost:8080/ProjetoSCC/admin/report.php");
  }
?>