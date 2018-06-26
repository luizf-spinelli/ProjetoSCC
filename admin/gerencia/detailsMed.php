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
    $dadosmeda = array();
    $dadosmedb = array();
    $dadosmedc = array();
    $dadosobs = array();
    
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
    
    $pm=mysqli_prepare($con,"SELECT OMBROAOMBRO,OMBRO,COLARINHO,BUSTO,ALTBUSTO,SEPBUSTO FROM cliente_medidas WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($pm,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($pm);
    mysqli_stmt_bind_result($pm,$oao,$omb,$col,$bst,$atb,$spb);    
    while(mysqli_stmt_fetch($pm))
    {
      array_push($dadosmeda,array($oao,$omb,$col,$bst,$atb,$spb));
      $_SESSION["idmedida"]=$idmedida;
    }
    
    $pn=mysqli_prepare($con,"SELECT BOCACALCA,CINTURA,QUADRIL,ALTQUADRIL,CINTURAAOJOELHO,CINTURAAOTORNOZELO,LARGJOELHO,ALTSAIA FROM cliente_medidas WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($pn,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($pn);
    mysqli_stmt_bind_result($pn,$bcc,$cin,$qdr,$atq,$caj,$cat,$lgj,$ats);    
    while(mysqli_stmt_fetch($pn))
    {
      array_push($dadosmedb,array($bcc,$cin,$qdr,$atq,$caj,$cat,$lgj,$ats));
      $_SESSION["idmedida"]=$idmedida;
    }
    
    $pq=mysqli_prepare($con,"SELECT CUMPRBRACO,LARGBRACO,PUNHO,ALTMANGATRESQUARTOS,ALTMANGACURTA,CAVASFRENTE,CENTROFRENTE,CAVASCOSTA,ALTFRENTE,ALTCOSTA,ALTGANCHOFRENTE,ALTGANCHOCOSTA FROM cliente_medidas WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($pq,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($pq);
    mysqli_stmt_bind_result($pq,$cpb,$lgb,$pnh,$amt,$atm,$cvf,$ctf,$cvc,$atf,$atc,$agf,$agc);    
    while(mysqli_stmt_fetch($pq))
    {
      array_push($dadosmedc,array($cpb,$lgb,$pnh,$amt,$atm,$cvf,$ctf,$cvc,$atf,$atc,$agf,$agc));
      $_SESSION["idmedida"]=$idmedida;
    }
    
    $po=mysqli_prepare($con,"SELECT IDMEDIDA,OBS FROM cliente_medidas WHERE IDMEDIDA=?");
    mysqli_stmt_bind_param($po,"i",$idmedida);
    $idmedida=$_GET["idmedida"];
    mysqli_stmt_execute($po);
    mysqli_stmt_bind_result($po,$idmedida,$obs);    
    while(mysqli_stmt_fetch($po))
    {
      array_push($dadosobs,array($idmedida,$obs));
      $_SESSION["idmedida"]=$idmedida;
    }  
    include_once("./layout/verMed.php");
  }
?>