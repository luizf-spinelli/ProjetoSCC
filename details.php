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
    $dadosmeda = array();
    $dadosmedb = array();
    $dadosmedc = array();
    $dadosobs = array();
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
    
    $pm=mysqli_prepare($con,"SELECT IDMEDIDA,OMBROAOMBRO,OMBRO,COLARINHO,CAVASFRENTE,CENTROFRENTE,CAVASCOSTA,BUSTO,ALTBUSTO FROM CLIENTE_MEDIDAS WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pm,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pm);
    mysqli_stmt_bind_result($pm,$idmedida,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb);    
    while(mysqli_stmt_fetch($pm))
    {
      array_push($dadosmeda,array($idmedida,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pn=mysqli_prepare($con,"SELECT SEPBUSTO,CINTURA,QUADRIL,ALTQUADRIL,ALTGANCHOFRENTE,ALTGANCHOCOSTA,CINTURAAOJOELHO,CINTURAAOTORNOZELO,LARGJOELHO FROM CLIENTE_MEDIDAS WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pn,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pn);
    mysqli_stmt_bind_result($pn,$spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj);    
    while(mysqli_stmt_fetch($pn))
    {
      array_push($dadosmedb,array($spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $pq=mysqli_prepare($con,"SELECT BOCACALCA,CUMPRBRACO,LARGBRACO,PUNHO,ALTMANGATRESQUARTOS,ALTMANGACURTA,ALTSAIA,ALTFRENTE,ALTCOSTA FROM CLIENTE_MEDIDAS WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($pq,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($pq);
    mysqli_stmt_bind_result($pq,$bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc);    
    while(mysqli_stmt_fetch($pq))
    {
      array_push($dadosmedc,array($bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc));
      $_SESSION["idcliente"]=$idcliente;
    }
    
    $po=mysqli_prepare($con,"SELECT OBS FROM CLIENTE_MEDIDAS WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($po,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($po);
    mysqli_stmt_bind_result($po,$obs);    
    while(mysqli_stmt_fetch($po))
    {
      array_push($dadosobs,array($obs));
      $_SESSION["idcliente"]=$idcliente;
    }  
    include_once("ver.php");
  }
?>