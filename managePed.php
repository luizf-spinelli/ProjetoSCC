<?php
  $tamanhoPagina=50;
  $inicioPagina=0;
  if (isset($_SERVER["PATH_INFO"])) {
    $pinfo = explode("/",$_SERVER["PATH_INFO"]);  
    if (isset($pinfo[1]) && isset($pinfo[2])) {
      if ($pinfo[1]=="Proxima") {
        $inicioPagina = (int)$pinfo[2] + $tamanhoPagina;
      } else if ($pinfo[1]=="Anterior") {
        $inicioPagina = (int)$pinfo[2] - $tamanhoPagina;
        if ($inicioPagina<0) $inicioPagina=0; 
      }
    }
  }
  include_once("conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("report.php");
  } else {
    $dadosped = array();
    
    $pd=mysqli_prepare($con,"SELECT IDPEDIDO,IDCLIENTE,DTSOLICITACAO,PRAZO,STATUS FROM PEDIDO ORDER BY PRAZO DESC LIMIT ?,?");
    mysqli_stmt_bind_param($pd,"ii",$inicioPagina,$tamanhoPagina);
    mysqli_stmt_execute($pd);
    mysqli_stmt_bind_result($pd,$idpedido,$idcliente,$sol,$prz,$stp);
    while(mysqli_stmt_fetch($pd))
    {
      array_push($dadosped,array($idpedido,$idcliente,$sol,$prz,$stp));
      $_SESSION["idpedido"]=++$idpedido;
    }
    include_once("gerenciarPed.php");
  }
?>