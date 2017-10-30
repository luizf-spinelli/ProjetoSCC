<?php
  include_once("conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("report.php");
  } else {
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
    
    $pe=mysqli_prepare($con,"SELECT IDCLIENTE,PAIS,ESTADO,CIDADE,BAIRRO,CEP,RUA,COMP FROM CLIENTE_ENDERECO WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pe,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pe);
    mysqli_stmt_bind_result($pe,$idcliente,$pas,$est,$cid,$brr,$cep,$rua,$com);    
    while(mysqli_stmt_fetch($pe))
    {
      array_push($dadosend,array($idcliente,$pas,$est,$cid,$brr,$cep,$rua,$com));
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
    include_once("ver.php");
  }
?>