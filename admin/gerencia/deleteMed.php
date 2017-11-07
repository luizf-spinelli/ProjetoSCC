<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$obs=$_GET["obs"];
        $idmedida=$_GET["idmedida"];
  	include_once("./layout/deletarMed.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Medida excluída com sucesso.";
	if (!isset($_POST["IDMEDIDA"])
                ) 
	{
		$MensagemErro="Parametros inválidos. Por favor, tente novamente.";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM CLIENTE_MEDIDAS WHERE IDMEDIDA=?");
		mysqli_stmt_bind_param($pm,"i",$idmedida);
                $idmedida=$_POST["IDMEDIDA"];
                mysqli_stmt_execute($pm);		
	}
    include_once("./manageMed.php");
  } else {
  	include_once("../report.php");
  }
?>