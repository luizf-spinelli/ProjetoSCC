<?php
  include("../functions/conexao.php");  
  if (!$con=abreConexao()) {
  	$MensagemErro="Erro na conexão.";
  	include_once("../report.php");
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadosfunc = array();  
        
    $pf=mysqli_prepare($con,"SELECT REGISTRO,NOME,FUNCAO,DTADMISSAO,DTDEMISSAO FROM FUNCIONARIO WHERE REGISTRO=?");
    mysqli_stmt_bind_param($pf,"i",$reg);
    $reg=$_GET["reg"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$reg,$nom,$fun,$dta,$dtd);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosfunc,array($reg,$nom,$fun,$dta,$dtd));
      $_SESSION["reg"]=$reg;
    }
    
    include_once("./layout/editarFunc.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Funcionário alterado com sucesso.";
	    if (!isset($_POST["REG"]) ||
		!isset($_POST["NOM"]) ||
		!isset($_POST["FUN"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("../report.php");
	    } else {
  		  $pf=mysqli_prepare($con,"update FUNCIONARIO set NOME=?, FUNCAO=?, DTADMISSAO=?, DTDEMISSAO=? where REGISTRO=?");
  		  mysqli_stmt_bind_param($pf,"ssssi",$_POST["NOM"],$_POST["FUN"],$_POST["DTA"],$_POST["DTD"],$_POST["REG"]);
  		  mysqli_stmt_execute($pf);

    	  include_once("manageFunc.php");
	    }
  	} else {
  		include_once("../report.php");
  	}
  }
?>