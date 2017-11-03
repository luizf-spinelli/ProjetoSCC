<?php
  include_once("../functions/conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("../report.php");
  } else {
    $dadoscli = array();
    $dadosped = array();
    $dadospag = array();
    
    $pm=mysqli_prepare($con,"SELECT IDPEDIDO,IDCLIENTE,DTINICIO,DTSOLICITACAO,PRAZO,QTDE,IDSERV,STATUS,OBSV FROM PEDIDO WHERE idpedido=?");
    mysqli_stmt_bind_param($pm,"i",$idpedido);
    $idpedido=$_GET["idpedido"];    
    mysqli_stmt_execute($pm);
    mysqli_stmt_bind_result($pm,$idpedido,$idcliente,$ini,$sol,$prz,$qtd,$idserv,$stp,$obv); 
    while(mysqli_stmt_fetch($pm))
    {
      array_push($dadosped,array($idpedido,$ini,$sol,$prz,$qtd,$stp,$obv));
      $_SESSION["idpedido"]=$idpedido;
    }
    
    $pn=mysqli_prepare($con,"SELECT TIPO,DTPAGAMENTO,VALOR,STATS FROM PAGAMENTO WHERE idpedido=?");
    mysqli_stmt_bind_param($pn,"i",$idpedido);
    $idpedido=$_GET["idpedido"];
    mysqli_stmt_execute($pn);
    mysqli_stmt_bind_result($pn,$met,$pag,$vlr,$sts);    
    while(mysqli_stmt_fetch($pn))
    {
      array_push($dadospag,array($met,$pag,$vlr,$sts));
      $_SESSION["idpedido"]=$idpedido;
    }
    
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
    
    include_once("./layout/verPed.php");
  }
?>