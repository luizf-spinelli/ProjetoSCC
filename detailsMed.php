<?php
  include_once("conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("report.php");
  } else {
    $dadoscli = array();
    $dadosmeda = array();
    $dadosmedb = array();
    $dadosmedc = array();
    $dadosobs = array();
    
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
    
    $pm=mysqli_prepare($con,"SELECT IDMEDIDA,OMBROAOMBRO,OMBRO,COLARINHO,CAVASFRENTE,CENTROFRENTE,CAVASCOSTA,BUSTO,ALTBUSTO FROM CLIENTE_MEDIDAS WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($pm,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($pm);
    mysqli_stmt_bind_result($pm,$idmedida,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb);    
    while(mysqli_stmt_fetch($pm))
    {
      array_push($dadosmeda,array($idmedida,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb));
      $_SESSION["idmedida"]=$idmedida;
    }
    
    $pn=mysqli_prepare($con,"SELECT SEPBUSTO,CINTURA,QUADRIL,ALTQUADRIL,ALTGANCHOFRENTE,ALTGANCHOCOSTA,CINTURAAOJOELHO,CINTURAAOTORNOZELO,LARGJOELHO FROM CLIENTE_MEDIDAS WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($pn,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($pn);
    mysqli_stmt_bind_result($pn,$spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj);    
    while(mysqli_stmt_fetch($pn))
    {
      array_push($dadosmedb,array($spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj));
      $_SESSION["idmedida"]=$idmedida;
    }
    
    $pq=mysqli_prepare($con,"SELECT BOCACALCA,CUMPRBRACO,LARGBRACO,PUNHO,ALTMANGATRESQUARTOS,ALTMANGACURTA,ALTSAIA,ALTFRENTE,ALTCOSTA FROM CLIENTE_MEDIDAS WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($pq,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($pq);
    mysqli_stmt_bind_result($pq,$bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc);    
    while(mysqli_stmt_fetch($pq))
    {
      array_push($dadosmedc,array($bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc));
      $_SESSION["idmedida"]=$idmedida;
    }
    
    $po=mysqli_prepare($con,"SELECT OBS FROM CLIENTE_MEDIDAS WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($po,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($po);
    mysqli_stmt_bind_result($po,$obs);    
    while(mysqli_stmt_fetch($po))
    {
      array_push($dadosobs,array($obs));
      $_SESSION["idmedida"]=$idmedida;
    }  
    include_once("verMed.php");
  }
?>