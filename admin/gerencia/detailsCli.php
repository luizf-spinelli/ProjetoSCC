<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  include_once("../functions/conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("../report.php");
  } else {
    $dadoscli = array();
    $dadosfis = array();
    $dadosjur = array();
    $dadostel = array();
    $dadosend = array();
    
    $ps=mysqli_prepare($con,"SELECT IDCLIENTE,NOME FROM cliente WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($ps,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($ps);
    mysqli_stmt_bind_result($ps,$idcliente,$nm);    
    while(mysqli_stmt_fetch($ps))
    {
      array_push($dadoscli,array($idcliente,$nm));
      $_SESSION["idcliente"]=$idcliente;
    }
        
    $pf=mysqli_prepare($con,"SELECT CPF,RG,SEXO,DTNASCIMENTO FROM cliente_fisico WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pf,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$cpf,$rg,$sx,$ns);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosfis,array($cpf,$rg,$sx,$ns));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pe=mysqli_prepare($con,"SELECT IDCLIENTE,PAIS,ESTADO,CIDADE,BAIRRO,CEP,RUA,COMP FROM cliente_endereco WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pe,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pe);
    mysqli_stmt_bind_result($pe,$idcliente,$pas,$est,$cid,$brr,$cep,$rua,$com);    
    while(mysqli_stmt_fetch($pe))
    {
      array_push($dadosend,array($pas,$est,$cid,$brr,$cep,$rua,$com));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pj=mysqli_prepare($con,"SELECT CNPJ,RSOCIAL FROM cliente_juridico WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pj,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pj);
    mysqli_stmt_bind_result($pj,$cnpj,$rsc);    
    while(mysqli_stmt_fetch($pj))
    {
      array_push($dadosjur,array($cnpj,$rsc));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pt=mysqli_prepare($con,"SELECT IDCLIENTE,TEL,CEL,EMAIL FROM cliente_contato WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pt,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pt);
    mysqli_stmt_bind_result($pt,$idcliente,$tel,$cel,$em);    
    while(mysqli_stmt_fetch($pt))
    {
      array_push($dadostel,array($tel,$cel,$em));
      $_SESSION["idcliente"]=$idcliente;
    }  
    include_once("./layout/verCli.php");
  }
?>