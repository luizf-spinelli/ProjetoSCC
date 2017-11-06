<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idmaq="";$tip="";$mod="";$dtm="";$pnm="";
  	include_once("./layout/cadastroMaq.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Máquina cadastrada com sucesso!";
	if (!isset($_POST["IDMAQ"]) || 
		!isset($_POST["TIP"])
	   ) 
	{
		$MensagemErro="Máquina não cadastrada, parametros invalidos.";
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO MAQUINA VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($ps,"isss",$idmaq,$dtm,$pnm,$tip,$mod);
		$idmaq=$_POST["IDMAQ"];
		$dtm=$_POST["DTM"];
		$pnm=$_POST["PNM"];
		$tip=$_POST["TIP"];
		$mod=$_POST["MOD"];
                mysqli_stmt_execute($ps);                
	}
    include_once("cadastro.php");
  } else {
  	include_once("http://localhost:8080/ProjetoSCC/admin/report.php");
  }
?>