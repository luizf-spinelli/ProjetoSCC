<?php
  include("conexao.php");  
  if (!$con=abreConexao()) {
  	$MensagemErro="Erro na conexão.";
  	include_once("report.php");
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadoscli = array();
    $dadosfis = array();
    $dadosjur = array();
    $dadostel = array();
    
    $ps=mysqli_prepare($con,"SELECT IDCLIENTE,NOME,ENDERECO FROM CLIENTE WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($ps,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($ps);
    mysqli_stmt_bind_result($ps,$idcliente,$nm,$ed);    
    while(mysqli_stmt_fetch($ps))
    {
      array_push($dadoscli,array($idcliente,$nm,$ed));
      $_SESSION["idcliente"]=$idcliente;
    }
        
    $pf=mysqli_prepare($con,"SELECT IDCLIENTE,CPF,RG FROM CLIENTE_FISICO WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pf,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$idcliente,$cpf,$rg);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosfis,array($idcliente,$cpf,$rg));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pj=mysqli_prepare($con,"SELECT IDCLIENTE,CNPJ FROM CLIENTE_JURIDICO WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pj,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pj);
    mysqli_stmt_bind_result($pj,$idcliente,$cnpj);    
    while(mysqli_stmt_fetch($pj))
    {
      array_push($dadosjur,array($idcliente,$cnpj));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pt=mysqli_prepare($con,"SELECT IDCLIENTE,TEL,CEL,EMAIL FROM TELEFONE WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pt,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pt);
    mysqli_stmt_bind_result($pt,$idcliente,$tel,$cel,$em);    
    while(mysqli_stmt_fetch($pt))
    {
      array_push($dadostel,array($idcliente,$tel,$cel,$em));
      $_SESSION["idcliente"]=$idcliente;
    }  		
    include_once("editar.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Cliente alterado com sucesso.";
	    if (!isset($_POST["IDCLIENTE"]) ||
		!isset($_POST["NM"]) ||
		!isset($_POST["ED"]) ||
                !isset($_POST["RG"]) ||
                !isset($_POST["CEL"]) ||
                !isset($_POST["TEL"]) ||
                !isset($_POST["EM"]) ||
                !isset($_POST["CPF"]) ||           
		!isset($_POST["CNPJ"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("report.php");
	    } else {
  		  $ps=mysqli_prepare($con,"update CLIENTE set nome=?, endereco=? where idcliente=?");
  		  mysqli_stmt_bind_param($ps,"ssi",$_POST["NM"],$_POST["ED"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($ps);
                  
  		  $pf=mysqli_prepare($con,"update CLIENTE_FISICO set cpf=?, rg=? where idcliente=?");
  		  mysqli_stmt_bind_param($pf,"ssi",$_POST["CPF"],$_POST["RG"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($pf);
                  
  		  $pj=mysqli_prepare($con,"update CLIENTE_JURIDICO set cnpj=? where idcliente=?");
  		  mysqli_stmt_bind_param($pj,"si",$_POST["CNPJ"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($pj);
                  
  		  $pt=mysqli_prepare($con,"update TELEFONE set tel=?, cel=?, email=? where idcliente=?");
  		  mysqli_stmt_bind_param($pt,"sssi",$_POST["TEL"],$_POST["CEL"],$_POST["EM"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($pt);

    	  include_once("show.php");
	    }
  	} else {
  		include_once("report.php");
  	}
  }
?>
