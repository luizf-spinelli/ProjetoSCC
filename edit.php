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
    $dadosend = array();
    
    $ps=mysqli_prepare($con,"SELECT IDCLIENTE,NOME FROM CLIENTE WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($ps,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($ps);
    mysqli_stmt_bind_result($ps,$idcliente,$nm);    
    while(mysqli_stmt_fetch($ps))
    {
      array_push($dadoscli,array($idcliente,$nm));
      $_SESSION["idcliente"]=$idcliente;
    }
        
    $pf=mysqli_prepare($con,"SELECT IDCLIENTE,CPF,RG,SEXO,DTNASCIMENTO FROM CLIENTE_FISICO WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pf,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$idcliente,$cpf,$rg,$sx,$ns);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosfis,array($idcliente,$cpf,$rg,$sx,$ns));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pj=mysqli_prepare($con,"SELECT IDCLIENTE,CNPJ,RSOCIAL FROM CLIENTE_JURIDICO WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pj,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pj);
    mysqli_stmt_bind_result($pj,$idcliente,$cnpj,$rsc);    
    while(mysqli_stmt_fetch($pj))
    {
      array_push($dadosjur,array($idcliente,$cnpj,$rsc));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pt=mysqli_prepare($con,"SELECT IDCLIENTE,TEL,CEL,EMAIL FROM CLIENTE_CONTATO WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pt,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pt);
    mysqli_stmt_bind_result($pt,$idcliente,$tel,$cel,$em);    
    while(mysqli_stmt_fetch($pt))
    {
      array_push($dadostel,array($idcliente,$tel,$cel,$em));
      $_SESSION["idcliente"]=$idcliente;
    }  	
    
    $pe=mysqli_prepare($con,"SELECT IDCLIENTE,PAIS,ESTADO,CIDADE,BAIRRO,CEP,RUA,COMP FROM CLIENTE_ENDERECO WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pe,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pe);
    mysqli_stmt_bind_result($pe,$idcliente,$pas,$est,$cid,$brr,$cep,$rua,$com);    
    while(mysqli_stmt_fetch($pe))
    {
      array_push($dadostel,array($idcliente,$pas,$est,$cid,$brr,$cep,$rua,$com));
      $_SESSION["idcliente"]=$idcliente;
    } 
    
    include_once("editar.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Cliente alterado com sucesso.";
	    if (!isset($_POST["IDCLIENTE"]) ||
		!isset($_POST["NM"]) ||
                !isset($_POST["RG"]) ||
                !isset($_POST["SX"]) ||
                !isset($_POST["NS"]) ||
                !isset($_POST["RSC"]) ||
                !isset($_POST["CEL"]) ||
                !isset($_POST["TEL"]) ||
                !isset($_POST["EM"]) ||
                !isset($_POST["PAS"]) ||           
                !isset($_POST["EST"]) ||           
                !isset($_POST["CID"]) ||           
                !isset($_POST["BRR"]) ||           
                !isset($_POST["CEP"]) ||           
                !isset($_POST["RUA"]) ||           
                !isset($_POST["COM"]) ||           
                !isset($_POST["CPF"]) ||           
		!isset($_POST["CNPJ"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("report.php");
	    } else {
  		  $ps=mysqli_prepare($con,"update CLIENTE set nome=? where idcliente=?");
  		  mysqli_stmt_bind_param($ps,"si",$_POST["NM"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($ps);
                  
  		  $pf=mysqli_prepare($con,"update CLIENTE_FISICO set cpf=?, rg=?, sexo=?, dtnascimento=? where idcliente=?");
  		  mysqli_stmt_bind_param($pf,"ssssi",$_POST["CPF"],$_POST["RG"],$_POST["SX"],$_POST["NS"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($pf);
                  
  		  $pj=mysqli_prepare($con,"update CLIENTE_JURIDICO set cnpj=?, rsocial=? where idcliente=?");
  		  mysqli_stmt_bind_param($pj,"ssi",$_POST["CNPJ"],$_POST["RSC"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($pj);
                  
  		  $pt=mysqli_prepare($con,"update CLIENTE_CONTATO set tel=?, cel=?, email=? where idcliente=?");
  		  mysqli_stmt_bind_param($pt,"sssi",$_POST["TEL"],$_POST["CEL"],$_POST["EM"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($pt);
                  
                  $pe=mysqli_prepare($con,"update CLIENTE_ENDERECO set pais=?, estado=?, cidade=?, bairro=?, cep=?, rua=?, comp=? where idcliente=?");
  		  mysqli_stmt_bind_param($pe,"sssssssi",$_POST["PAS"],$_POST["EST"],$_POST["CID"],$_POST["BRR"],$_POST["CEP"],$_POST["RUA"],$_POST["COM"],$_POST["IDCLIENTE"]);
  		  mysqli_stmt_execute($pe);

    	  include_once("show.php");
	    }
  	} else {
  		include_once("report.php");
  	}
  }
?>
