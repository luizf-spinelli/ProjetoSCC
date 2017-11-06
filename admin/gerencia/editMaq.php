<?php
  include("../functions/conexao.php");  
  if (!$con=abreConexao()) {
  	$MensagemErro="Erro na conexão.";
  	include_once("../report.php");
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadosmaq = array();  
        
    $pf=mysqli_prepare($con,"SELECT IDMAQ,TIPO,MODELO,DTUMANUTENCAO,DTPMANUTENCAO FROM MAQUINA WHERE IDMAQ=?");
    mysqli_stmt_bind_param($pf,"i",$idmaq);
    $idmaq=$_GET["idmaq"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$idmaq,$tip,$mod,$dtm,$pnm);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosmaq,array($idmaq,$tip,$mod,$dtm,$pnm));
      $_SESSION["idmaq"]=$idmaq;
    }
    
    include_once("./layout/editarMaq.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Máquina alterada com sucesso.";
	    if (!isset($_POST["IDMAQ"]) ||
		!isset($_POST["TIP"]) ||
		!isset($_POST["MOD"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("../report.php");
	    } else {
  		  $pf=mysqli_prepare($con,"update MAQUINA set TIPO=?, MODELO=?, DTUMANUTENCAO=?, DTPMANUTENCAO=? where IDMAQ=?");
  		  mysqli_stmt_bind_param($pf,"ssssi",$_POST["TIP"],$_POST["MOD"],$_POST["DTM"],$_POST["PNM"],$_POST["IDMAQ"]);
  		  mysqli_stmt_execute($pf);

    	  include_once("manageMaq.php");
	    }
  	} else {
  		include_once("../report.php");
  	}
  }
?>